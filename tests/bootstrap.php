<?php
// require_once(dirname(__FILE__).'/MoneyTest.php');
require_once './vendor/autoload.php';

require_once './app/expression.php';
require_once './app/bank.php';
require_once './app/sum.php';
require_once './app/money.php';

// autoloder設定したかったけどnamespaceでうまく動かないので保留
// spl_autoload_register(function ($class) {
//     $file_path = './app/' . strtolower($class) . '.php';
//     if (file_exists($file_path)) {
//         include $file_path;
//     }
// });
