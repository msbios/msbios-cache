<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Cache;

use Laminas\Stdlib\ArrayUtils;

/**
 * Class Module
 * @package MSBios\Cache
 */
class Module extends \MSBios\Module
{
    /** @const VERSION */
    const VERSION = '2.0.0';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir(): string
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return ArrayUtils::merge(
            parent::getConfig(),
            (new ConfigProvider)()
        );
    }
}
