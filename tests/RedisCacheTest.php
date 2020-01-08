<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use Laminas\Cache\Storage\Adapter\Redis;

/**
 * Class RedisCacheTest
 * @package MSBiosTest\Cache
 */
class RedisCacheTest extends AbstractCacheTest
{

    /**
     * @return string
     */
    protected function getAdapterName(): string
    {
        return Redis::class;
    }
}
