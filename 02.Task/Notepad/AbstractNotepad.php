<?php

namespace Notepad;

use Pages\Page;

abstract class AbstractNotepad
{
	protected $pages;
	protected $numberOfPages;
	
	public function __construct($numberOfPages)
	{
		$this->numberOfPages = $numberOfPages;
		
		for ($i = 0; $i < $numberOfPages; $i++) {
			$this->pages[$i] = new Page('', '');
		}
	}
	
	abstract public function insertText($title, $text, $pageNumber);
	abstract public function replaceText($text, $pageNumber);
	abstract public function deleteText($pageNumber);
	abstract public function reviewAllPages();
	abstract public function findWord($word);
	abstract public function printAllPagesWithDigits();
}