<?php

namespace Notepad;

use Pages\Page;

class SimpleNotepad extends AbstractNotepad
{	
	public function insertText($title, $text, $pageNumber)
	{
		if ($pageNumber > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->setTitle($title);
		$this->pages[$pageNumber - 1]->addText($text);
	}
	
	public function replaceText($text, $pageNumber)
	{
		if ($pageNumber > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->removeText();
		$this->pages[$pageNumber - 1]->addText($text);
	}
	
	public function deleteText($pageNumber)
	{
		if ($pageNumber > count($this->pages)) {
			throw new \Exception('There is no such page in the notebook!');
		}
		$this->pages[$pageNumber - 1]->removeText();
	}
	
	public function findWord($word)
	{
		foreach ($this->pages as $key => $page) {
			$rez = $page->searchWord($word);
			if ($rez === false) {
				return "No page with this word '$word' in the notepad.";
			} else {
				return "The word '$word'is located in page " . $key + 1 . "on position $rez.";
			}
		}
	}
	
	public function reviewAllPages()
	{
		foreach ($this->pages as $key => $page) {
			echo $page->reviewPage(), PHP_EOL;
		}
	}
	
	public function printAllPagesWithDigits()
	{
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