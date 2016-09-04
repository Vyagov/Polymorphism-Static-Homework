<?php

namespace Notepad;

require_once 'readline.php';

class SecuredNotepad extends AbstractNotepad
{
	private $password;
	
	public function __construct($numberOfPages, $password)
	{
		parent::__construct($numberOfPages);
		
		$_GET['password'] = $password;
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
}