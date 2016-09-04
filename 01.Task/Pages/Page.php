<?php
 
namespace Pages;

class Page
{
	protected $title;
	protected $text;
	
	public function __construct($title, $text)
	{
		$this->title = $title;
		$this->text = $text;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function setTitle($value)
	{
		return $this->title = $value;
	}
	
	public function getText()
	{
		return $this->text;
	}
	
	public function addText($text)
	{
		$this->text .= $text;
	}
	
	public function removeText()
	{
		$this->text = '';
	}
	
	public function reviewPage()
	{
		return sprintf("%s\n%s\n",
				$this->title,
				$this->text
			);
	}
}