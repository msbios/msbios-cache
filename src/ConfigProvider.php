<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Cache;

use Laminas\Cache\Storage\Adapter\Filesystem;

/**
 * Class ConfigProvider
 * @package MSBios\Cache
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'caches' => [
                Filesystem::class => [
                    'adapter' => [
                        'name' => Filesystem::class,
                        'options' => [
                            'cache_dir' => './data/cache',

                        ]
                    ],
                    'ttl' => 86400,
                    'plugins' => [
                        // [
                        //     'name' => 'serializer',
                        //     'options' => []
                        // ],
                        // or
                        'serializer' => [
                            // options information
                        ],
                        'exception_handler' => [
                            'throw_exceptions' => true
                        ]
                    ]
                ]
            ]
        ];
    }
}
