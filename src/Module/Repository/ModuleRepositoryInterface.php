<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 12:59 PM
 */

namespace Vain\Data\Module\Repository;

use Vain\Data\Module\DataModuleInterface;

interface ModuleRepositoryInterface
{
    /**
     * @param string $moduleName
     *
     * @return DataModuleInterface
     */
    public function getModule($moduleName);

}