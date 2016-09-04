<?php

namespace Notepad;

require_once 'readline.php';

class SecuredNotepad extends AbstractNotepad
{
	protected  $password;
	
	public function __construct($numberOfPages, $password)
	{
		if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/', $password)) {
			throw new \Exception('The password must be strong!');
		}
		$_GET['password'] = $password;
		
		parent::__construct($numberOfPages);
	}
	
	public function insertText($title, $text, $pageNumber)
	{
		$this->password = readline('Input your password for insert: ');
		
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		if ($pageNumber - 1 > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->setTitle($title);
		$this->pages[$pageNumber - 1]->addText($text);
	}
	
	public function replaceText($text, $pageNumber)
	{
		$this->password = readline('Input your password for replace: ');
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		if ($pageNumber - 1 > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->removeText();
		$this->pages[$pageNumber - 1]->addText($text);
	}
	
	public function deleteText($pageNumber)
	{
		$this->password = readline('Input your password for delete: ');
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		if ($pageNumber - 1 > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->removeText();
	}
	
	public function findWord($word)
	{
		$this->password = readline('Input your password for find word: ');
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		foreach ($this->pages as $key => $page) {
			$result = $page->searchWord($word);
			
			if ($result !== false) {
				echo "The word '$word' is located in page " . ($key + 1) . " on index $result.";
				return;
			}
		}
		echo "No page with word '$word' in the notepad.";
	}
	
	public function reviewAllPages()
	{
		$this->password = readline('Input your password for review: ');
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		foreach ($this->pages as $page) {
			echo $page->reviewPage();
		}
	}
	
	public function printAllPagesWithDigits()
	{
		$this->password = readline('Input your password for review all pages with digits: ');
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		
		$someDigits = false;
		foreach ($this->pages as $key =>$page) {
			if ($page->containsDigits()) {
				echo $page->reviewPage(), PHP_EOL;
				$someDigits = true;
			}
		}
	
		if (!$someDigits) {
			echo 'No page with digits in the notepad.';
		}
	}
}