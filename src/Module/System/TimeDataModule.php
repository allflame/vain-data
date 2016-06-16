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
namespace Vain\Data\Module\System;

use Vain\Data\Module\AbstractDataModule;

/**
 * Class TimeDataModule
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class TimeDataModule extends AbstractDataModule
{
    /**
     * DateTimeDataModule constructor.
     */
    public function __construct()
    {
        parent::__construct('system.time');
    }

    /**
     * @inheritDoc
     */
    public function getData(\ArrayAccess $runtimeData = null)
    {
        return new \DateTime();
    }
}