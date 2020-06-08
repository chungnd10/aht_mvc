<?php

namespace App\Core;

/**
 * Class Model
 * @package App\Core
 */
class Model
{
    /**
     * Get properties of model
     * @return array
     */
    public function getProperties()
    {
        return get_object_vars($this);
    }
}
