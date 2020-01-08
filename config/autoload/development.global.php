<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache;

use Laminas\Cache\Service\StorageCacheAbstractServiceFactory;
use Laminas\Cache\Storage\Adapter\Redis;

return [
    'service_manager' => [
        'abstract_factories' => [
            StorageCacheAbstractServiceFactory::class
        ]
    ],

    'caches' => [
        Redis::class => [
            'adapter' => [
                'name' => Redis::class,
                'options' => [
                    // 'resource_manager' => '',
                    // 'resource_id' => '',
                    'server' => [ // 'tcp://redis-cli:6379?password=secret'
                        //'auth' => true, // enable authentication
                        //'password' => 'secret',
                        'host' => 'redis-cli',
                        'port' => 6379,
                        'timeout' => 30
                    ]
                ]
            ],
            'plugins' => [
                'serializer' => [
                    'serializer' => 'json'
                ],
                'exception_handler' => [
                    'throw_exceptions' => true
                ]
            ]
        ]
    ]
];
