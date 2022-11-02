<?php

require_once 'vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];
$request = explode("/", $request);
$request = end($request);
$request = empty($request) ? "index.php" : $request;

require_once(__dir__ . "\\public\\" . $request);
