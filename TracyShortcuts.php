<?php

/*
 * Alias for \Tracy\Debugger::dump
 */
function dd($var) {
	foreach (func_get_args() as $arg) {
		\Tracy\Debugger::dump($arg);
	}
	return $var;
}

/*
 * Alias for \Tracy\Debugger::barDump
 */
function bd($var) {
	foreach (func_get_args() as $arg) {
		\Tracy\Debugger::barDump($arg);
	}
	return $var;
}
