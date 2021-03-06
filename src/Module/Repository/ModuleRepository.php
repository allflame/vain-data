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

namespace Vain\Data\Module\Repository;

use Vain\Data\Module\DataModuleInterface;
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
    public function getModule(string $moduleName) : DataModuleInterface
    {
        if (false === array_key_exists($moduleName, $this->modules)) {
            $this->modules[$moduleName] = $this->moduleFactory->createModule($moduleName);
        }

        return $this->modules[$moduleName];
    }
}