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
declare(strict_types=1);

namespace Vain\Data\Module\Factory;

use Vain\Data\Module\DataModuleInterface;

/**
 * Interface ModuleFactoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface ModuleFactoryInterface
{
    /**
     * @param string $moduleName
     *
     * @return DataModuleInterface
     */
    public function createModule(string $moduleName) : DataModuleInterface;
}