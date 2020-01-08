<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache;

use Laminas\Cache\Service\StorageCacheAbstractServiceFactory;
use Laminas\Cache\Storage\Adapter\MongoDb;
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
                    'server' => [ // 'tcp://localhost:port?password=secret'
                        // 'auth' => true, // enable authentication
                        // 'password' => 'secret',
                        'host' => 'redis-cli',
                        'port' => 6379,
                        'timeout' => 30
                    ]
                ]
            ],
            'ttl' => 60,
            'plugins' => [
                'serializer' => [
                    'serializer' => 'json'
                ],
                'exception_handler' => [
                    'throw_exceptions' => true
                ]
            ]
        ],
        MongoDb::class => [
            'adapter' => [
                'name' => MongoDb::class,
                'server' => 'mongodb://demo:secret@mongo-cli/cache',
                'connection_options' => [
                    'connect' => true,
                    'connectTimeoutMS' => 5000,
                    'fsync' => true,
                    'readPreference' => 'primaryPreferred',
                    'replicaSet' => 'set-1',
                ],
                'database' => 'cache',
                'collection' => 'records',
                'ttl' => 3600,
            ],
            'plugins' => [
                'serializer' => [
                    'serializer' => 'json'
                ],
                'exception_handler' => [
                    'throw_exceptions' => true
                ]
            ]
        ],
    ]
];
