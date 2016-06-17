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
namespace Vain\Data\Module;

/**
 * Interface DataModuleInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface DataModuleInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @param \ArrayAccess $runtimeData
     *
     * @return mixed
     */
    public function getData(\ArrayAccess $runtimeData = null);
}