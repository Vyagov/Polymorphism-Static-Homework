<?php

namespace Notepad;

require_once 'readline.php';

class ElectronicSecuredNotepad extends AbstractElectronicDevice
{
	protected $isStarted;
	
	public function __construct($numberOfPages, $password)
	{
		$this->isStarted = true;
		echo '☺ The notepad is started ☺', PHP_EOL;
		parent::__construct($numberOfPages, $password);
	}
	
	public function start()
	{	
		$this->password = readline('Input your password for start the nodepad: ');
		
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		echo '☺ The notepad is started ☺';
		return $this->isStarted = true;
	}
	
	public function stop()
	{
		$this->password = readline('Input your password for stop the nodepad: ');
		
		if ($this->password !== $_GET['password']) {
			throw new \Exception('Wrong password!');
		}
		echo 'The notepad is stopped!';
		return $this->isStarted = false;
	}
	
	public function isStarted()
	{
		return $this->isStarted;
	}
	

	public function insertText($title, $text, $pageNumber)
	{
		if ($this->isStarted()) {
			parent::insertText($title, $text, $pageNumber);
		}
	}
	
	public function replaceText($text, $pageNumber)
	{
		if ($this->isStarted()) {
			parent::replaceText($text, $pageNumber);
		}
	}
	
	public function deleteText($pageNumber)
	{
		if ($this->isStarted()) {
			parent::deleteText($pageNumber);
		}
	}
	
	public function findWord($word)
	{
		if ($this->isStarted()) {
			parent::findWord($word);
		}
	}
	
	public function reviewAllPages()
	{
		if ($this->isStarted()) {
			parent::reviewAllPages();
		}
	}
	
	public function printAllPagesWithDigits()
	{
		if ($this->isStarted()) {
			parent::printAllPagesWithDigits();
		}
	}
}