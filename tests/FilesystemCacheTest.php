<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use PHPUnit\Framework\TestCase;
use Zend\Cache\Storage\Adapter\Filesystem;
use Zend\Test\Util\ModuleLoader;

/**
 * Class FilesystemCacheTest
 * @package MSBiosTest\Cache
 */
class FilesystemCacheTest extends TestCase
{
    /**
     *
     */
    public function testCallFilesystemCache()
    {
        /** @var ModuleLoader $loader */
        $loader = new ModuleLoader(require  __DIR__ . '/../config/application.config.php');

        /** @var Filesystem $cache */
        $cache = $loader->getServiceManager()->get('FilesystemCache');

        /** @var array $value */
        $value = [__NAMESPACE__];
        $cache->setItem(__FUNCTION__, $value);
        $this->assertEquals($value, $cache->getItem(__FUNCTION__));
        $cache->removeItem(__FUNCTION__);
    }
}
