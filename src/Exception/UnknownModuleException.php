<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-data
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-data
 */
declare(strict_types = 1);

namespace Vain\Data\Exception;

use Vain\Data\Module\Factory\ModuleFactoryInterface;

/**
 * Class UnknownModuleException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class UnknownModuleException extends ModuleFactoryException
{
    /**
     * UnknownSandboxModuleFactoryException constructor.
     *
     * @param ModuleFactoryInterface $moduleFactory
     * @param string                 $name
     */
    public function __construct(ModuleFactoryInterface $moduleFactory, string $name)
    {
        parent::__construct($moduleFactory, sprintf('Unknown module %s', $name));
    }
}