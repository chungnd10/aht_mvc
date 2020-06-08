<?php

namespace App\Models\Task;

use App\Core\Model;

/**
 * Class CategoryModel
 * @package App\Models\Task
 */
class TaskModel extends Model
{
    /**
     * @var $title
     */
    public $title;
    /**
     * @var $description
     */
    public $description;

    /**
     * Get title model
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title model
     * @param $title
     */
    public function setTitle($title)
    {
        if (isset($title)) {
            $this->title = $title;
        }
    }

    /**
     * Get description model
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description model
     * @param $description
     */
    public function setDescription($description)
    {
        if (isset($description)) {
            $this->title = $description;
        }
    }
}
