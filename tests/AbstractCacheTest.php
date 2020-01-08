<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use Laminas\Cache\Storage\Adapter\Filesystem;
use Laminas\Cache\Storage\StorageInterface;
use Laminas\Test\Util\ModuleLoader;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractCacheTest
 * @package MSBiosTest\Cache
 */
abstract class AbstractCacheTest extends TestCase
{
    /** @var StorageInterface */
    protected $cache;

    /**
     * @return string
     */
    abstract protected function getAdapterName(): string;

    protected function setUp(): void
    {
        /** @var ModuleLoader $loader */
        $loader = new ModuleLoader(require  __DIR__ . '/../config/application.config.php');
        $this->cache = $loader->getServiceManager()->get($this->getAdapterName());
    }

    /**
     *
     */
    public function testWriteAndRemoveValueFromStorage(): void
    {
        /** @var array $value */
        $value = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ];
        $this->cache->setItem($key = __FUNCTION__, $value);
        $this->assertEquals($value, $this->cache->getItem($key));
        $this->assertTrue($this->cache->hasItem($key));

        // $this->cache->removeItem($key);
        // $this->assertFalse($this->cache->hasItem($key));
    }
}
