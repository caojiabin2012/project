<?php
use ZPHP\ZPHP;
define('ROOT_PATH', dirname(__DIR__));
require '../../framework/zphp'. DIRECTORY_SEPARATOR . 'ZPHP' . DIRECTORY_SEPARATOR . 'ZPHP.php';
ZPHP::run(ROOT_PATH);