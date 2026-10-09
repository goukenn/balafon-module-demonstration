<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20261009 08:58:04

if (!function_exists('igk_autoload_test')){
require_once $_ENV['IGK_APP_DIR'].'/Lib/igk/igk_framework.php';
}
require_once igk_autoload_test('IGK_APP_DIR') . '/Lib/igk/Lib/Tests/autoload.php';
