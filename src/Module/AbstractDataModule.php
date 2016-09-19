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

namespace Vain\Data\Module;

/**
 * Class AbstractDataModule
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractDataModule implements DataModuleInterface
{
    private $name;

    /**
     * AbstractDataModule constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function __toString() : string
    {
        return $this->name;
    }
}