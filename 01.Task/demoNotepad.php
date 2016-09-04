<?php

use Notepad\SimpleNotepad;
use Notepad\SecuredNotepad;

require_once 'autoload.php';

/* $nodepad = new SimpleNotepad(2);

echo str_repeat('-', 10) . 'Step 1' . str_repeat('-', 10), PHP_EOL;
$nodepad->insertText(
	'First Page', 
	'Lorem ipsum dolor sit amet.', 
	1
);
$nodepad->reviewAllPages();

echo str_repeat('-', 10) . 'Step 2' . str_repeat('-', 10), PHP_EOL;
$nodepad->insertText(
	'Second Page', 
	'Lorem ipsum dolor sit amet, consectetur.', 
	2
);
$nodepad->reviewAllPages();

echo str_repeat('-', 10) . 'Step 3' . str_repeat('-', 10), PHP_EOL;
$nodepad->deleteText(1);
$nodepad->reviewAllPages();

echo str_repeat('-', 10) . 'Step 4' . str_repeat('-', 10), PHP_EOL;
$nodepad->replaceText('Replace Text', 2);
$nodepad->reviewAllPages(); */

$nodepadSec = new SecuredNotepad(2, 'pass');

$nodepadSec->insertText(
	'First Page',
	'Lorem ipsum dolor sit amet.',
	1
);
$nodepadSec->reviewAllPages();
echo PHP_EOL, str_repeat('-', 20), PHP_EOL;

$nodepadSec->insertText(
	'Second Page',
	'Lorem ipsum dolor sit amet, consectetur.',
	2
);
$nodepadSec->reviewAllPages();
echo PHP_EOL, str_repeat('-', 20), PHP_EOL;

$nodepadSec->deleteText(1);
$nodepadSec->reviewAllPages();
echo PHP_EOL, str_repeat('-', 20), PHP_EOL;

$nodepadSec->replaceText('Replace Text', 2);
$nodepadSec->reviewAllPages();

