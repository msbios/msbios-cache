<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use Laminas\Cache\Storage\Adapter\MongoDb;

/**
 * Class RedisCacheTest
 * @package MSBiosTest\Cache
 */
class MongoDBCacheTest extends AbstractCacheTest
{
    /**
     * @return string
     */
    protected function getAdapterName(): string
    {
        return MongoDb::class;
    }
}
