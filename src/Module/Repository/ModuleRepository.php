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
namespace Vain\Data\Module\Repository;

use Vain\Data\Module\Factory\ModuleFactoryInterface;

/**
 * Class ModuleRepository
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ModuleRepository implements ModuleRepositoryInterface
{
    private $moduleFactory;

    private $modules;

    /**
     * VainDataProviderModuleManager constructor.
     *
     * @param ModuleFactoryInterface $moduleFactory
     * @param array                  $modules
     */
    public function __construct(ModuleFactoryInterface $moduleFactory, array $modules = [])
    {
        $this->moduleFactory = $moduleFactory;
        $this->modules = $modules;
    }

    /**
     * @inheritDoc
     */
    public function getModule($moduleName)
    {
        if (false === array_key_exists($moduleName, $this->modules)) {
            $this->modules[$moduleName] = $this->moduleFactory->createModule($moduleName);
        }

        return $this->modules[$moduleName];
    }
}