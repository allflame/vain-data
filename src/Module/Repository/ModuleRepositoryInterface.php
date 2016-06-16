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

use Vain\Data\Module\DataModuleInterface;

/**
 * Interface ModuleRepositoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface ModuleRepositoryInterface
{
    /**
     * @param string $moduleName
     *
     * @return DataModuleInterface
     */
    public function getModule($moduleName);
}