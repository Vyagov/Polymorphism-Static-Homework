<?php


use Notepad\ElectronicSecuredNotepad;

require_once 'autoload.php';

$nodepadEl = new ElectronicSecuredNotepad(2, 'abcD1');

$nodepadEl->insertText(
	'First Page',
	'Iusto deleniti voluptatem consequatur aliquam ab et temporibus quisquam laboriosam.',
	1
);
$nodepadEl->insertText(
	'Second Page',
	'Lorem ipsum dolor sit 21 amet, consectetur adipisicing elit. Voluptatem.',
	2
);
$nodepadEl->findWord('aliquam');

echo PHP_EOL, str_repeat('-', 20), PHP_EOL;
$nodepadEl->stop();

echo PHP_EOL, str_repeat('-', 20), PHP_EOL;
$nodepadEl->start();

echo PHP_EOL, str_repeat('-', 20), PHP_EOL;
$nodepadEl->printAllPagesWithDigits();

