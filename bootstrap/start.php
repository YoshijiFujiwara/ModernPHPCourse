<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/21
 * Time: 18:39
 */

/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/21
 * Time: 17:44
 */

session_start();

// __DIR__ はカレントディレクトリ
require(__DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

$router = new AltoRouter();