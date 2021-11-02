<?php
// Version
const VERSION = '3.0.3.7';
const VERSION_CORE = 'ocStore';
const VERSION_BUILD = '0001';

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');
