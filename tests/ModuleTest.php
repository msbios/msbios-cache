<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use MSBios\Cache\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Cache
 */
class ModuleTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function testGetConfig(): void
    {
        $this->assertIsArray((new Module)->getConfig());
    }

    /**
     * @inheritdoc
     */
    public function testGetAutoloaderConfig(): void
    {
        $this->assertIsArray((new Module)->getAutoloaderConfig());
    }
}
