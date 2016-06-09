<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 9:53 AM
 */

namespace Vain\Data\Module\Repository;

use Vain\Data\Module\Factory\ModuleFactoryInterface;

class ModuleRepository implements ModuleRepositoryInterface
{
    private $moduleFactory;

    private $modules;
    
    /**
     * VainDataProviderModuleManager constructor.
     * @param ModuleFactoryInterface $moduleFactory
     * @param array $modules
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