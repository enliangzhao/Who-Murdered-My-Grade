<?php
/**
 * author: andres
 * 2/8/20
 * CSE 477 Spring 2020
 */
require __DIR__ . "/../vendor/autoload.php";
$site = new Game\Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
    $localize($site);
}
// Start the PHP session system
session_start();