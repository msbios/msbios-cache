<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Cache;

use Laminas\Cache\Storage\Adapter\Filesystem;

/**
 * Class FilesystemCacheTest
 * @package MSBiosTest\Cache
 */
class FilesystemCacheTest extends AbstractCacheTest
{

    /**
     * @return string
     */
    protected function getAdapterName(): string
    {
        return Filesystem::class;
    }
}
