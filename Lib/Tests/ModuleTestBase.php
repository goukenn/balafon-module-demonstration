<?php
// @author: C.A.D. BONDJE DOUE
// @date: 20261009 08:58:04
namespace com\igkdev\balafon\module_demonstration\Tests;

use IGK\Tests\BaseTestCase;

/**
* 
* @package com\igkdev\balafon\module_demonstration\Tests
* @author C.A.D. BONDJE DOUE
*/
abstract class ModuleTestBase extends BaseTestCase{
	public static function setUpBeforeClass(): void{
	   igk_require_module(\com\igkdev\balafon\module_demonstration::class);
	}
}