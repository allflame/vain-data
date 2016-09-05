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

namespace Vain\Data\Module;
use Vain\Core\String\StringInterface;

/**
 * Interface DataModuleInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface DataModuleInterface extends StringInterface
{
    /**
     * @param \ArrayAccess $runtimeData
     *
     * @return mixed
     */
    public function getData(\ArrayAccess $runtimeData = null);
}