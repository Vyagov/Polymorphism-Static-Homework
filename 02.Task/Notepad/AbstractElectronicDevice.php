<?php

namespace Notepad;

abstract class AbstractElectronicDevice extends SecuredNotepad
{
	abstract public function start();
	abstract public function stop();
	abstract public function isStarted();
}