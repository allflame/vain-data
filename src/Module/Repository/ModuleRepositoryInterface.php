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
    public function getModule(string $moduleName) : DataModuleInterface;
}