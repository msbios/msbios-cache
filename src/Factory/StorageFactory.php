<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Cache\Module;
use Zend\Cache\StorageFactory as DefaultStorageFactory;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class StorageFactory
 * @package MSBios\Cache\Factory
 */
class StorageFactory implements FactoryInterface
{

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return \Zend\Cache\Storage\StorageInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $options */
        $options = $options ?: $container->get(Module::class);
        return DefaultStorageFactory::factory($options);
    }
}
