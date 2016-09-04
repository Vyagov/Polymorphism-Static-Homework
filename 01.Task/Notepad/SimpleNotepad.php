<?php

namespace Notepad;

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
	
	public function reviewAllPages()
	{
		foreach ($this->pages as $key => $page) {
			echo $page->reviewPage(), PHP_EOL;
		}
	}
}