<?php

defined('PHING_TEST_BASE') || define('PHING_TEST_BASE', dirname(__FILE__));

set_include_path(
    realpath(dirname(__FILE__) . '/../classes') . PATH_SEPARATOR .
        realpath(dirname(__FILE__) . '/classes') . PATH_SEPARATOR .
        get_include_path()
);

require_once dirname(__DIR__) . '/vendor/phing/phing/test/classes/phing/BuildFileTest.php';
require_once('phing/Phing.php');

Phing::startup();

require_once dirname(__DIR__) . '/src/PlatinumPixs/RandomString/GenerateTask.php';
require_once dirname(__DIR__) . '/src/PlatinumPixs/RandomString/Generate.php';