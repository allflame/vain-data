<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 9:53 AM
 */

namespace Vain\Data\Module\Factory;

use Vain\Data\Module\DataModuleInterface;

interface ModuleFactoryInterface
{
    /**
     * @param string $moduleName
     * 
     * @return DataModuleInterface
     */
    public function createModule($moduleName);
}