<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache;

use Zend\Cache\Storage\Adapter\Filesystem;

return [

    'service_manager' => [
        'factories' => [
            // ...
        ]
    ],

    'caches' => [
        'FilesystemCache' => [
            'adapter' => [
                'name' => Filesystem::class,
                'options' => [
                    'cache_dir' => './data/cache',
                    'ttl' => 3600
                ]
            ],
            'plugins' => [
                [
                    'name' => 'serializer',
                    'options' => []
                ],
                'exception_handler' => [
                    'throw_exceptions' => true
                ]
            ]
        ]
    ]
];
