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

namespace Vain\Data\Module\System;

use Vain\Data\Module\AbstractDataModule;

/**
 * Class RuntimeDataModule
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class RuntimeDataModule extends AbstractDataModule
{
    /**
     * DateTimeDataModule constructor.
     */
    public function __construct()
    {
        parent::__construct('system.runtime');
    }

    /**
     * @inheritDoc
     */
    public function getData(\ArrayAccess $runtimeData = null)
    {
        return $runtimeData;
    }
}