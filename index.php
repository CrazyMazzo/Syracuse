<?php

/**
 * Syracuse
 *
 * @version     1.0 Beta 1
 * @author      Team Aeros
 * @copyright   2017, Syracuse
 * @since       1.0 Beta 1
 *
 * @license     MIT
 */

const MIN_PHP_VERSION = '7.1.0';
const SOFTWARE_VERSION = '1.0 Beta 1';

if (version_compare(phpversion(), MIN_PHP_VERSION, '<'))
    die(sprintf('You are running an unsupported PHP version. Syracuse requires PHP %s. Aborting...', MIN_PHP_VERSION));

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/public/index.php';