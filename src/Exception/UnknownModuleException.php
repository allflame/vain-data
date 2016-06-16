<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-expression
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-expression
 */
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
    public function __construct(ModuleFactoryInterface $moduleFactory, $name)
    {
        parent::__construct($moduleFactory, sprintf('Unknown module %s', $name), 0, null);
    }
}