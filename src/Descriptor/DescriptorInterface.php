<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 10:19 PM
 */

namespace Vain\Data\Descriptor;

use Vain\Core\String\StringInterface;
use Vain\Data\Serializer\SerializableInterface;

interface DescriptorInterface extends SerializableInterface, StringInterface
{
    /**
     * @param \ArrayAccess $runtimeData
     *
     * @return mixed
     */
    public function getValue(\ArrayAccess $runtimeData = null);
}