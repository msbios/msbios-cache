<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache;

return [

    Module::class => [
        'adapter' => [
            'name' => 'Filesystem',
            'options' => [
                'cache_dir' => './data/cache',
                'ttl' => '3600'
            ]
        ],
        'plugins' => [
            [
                'name' => 'serializer',
                'options' => []
            ],
            'exception_handler' => [
                'throw_exceptions' => true
            ],
        ]
    ]

];
