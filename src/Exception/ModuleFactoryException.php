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

use Vain\Core\Exception\AbstractCoreException;
use Vain\Data\Module\Factory\ModuleFactoryInterface;

/**
 * Class ModuleFactoryException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ModuleFactoryException extends AbstractCoreException
{
    private $moduleFactory;

    /**
     * SandboxModuleFactoryException constructor.
     *
     * @param ModuleFactoryInterface $moduleFactory
     * @param string                 $message
     * @param int                    $code
     * @param \Exception             $previous
     */
    public function __construct(
        ModuleFactoryInterface $moduleFactory,
        string $message,
        int $code = 500,
        \Exception $previous = null
    ) {
        $this->moduleFactory = $moduleFactory;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ModuleFactoryInterface
     */
    public function getModuleFactory() : ModuleFactoryInterface
    {
        return $this->moduleFactory;
    }
}