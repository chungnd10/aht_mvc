<?php

namespace App\Models;

use App\Core\Model;

/**
 * Class CategoryModel
 * @package App\Models
 */
class CategoryModel extends Model
{
    /**
     * @var $name
     */
    public $category_name;
    /**
     * @var $content
     */
    public $content;

    /**
     * Get name model
     * @return mixed
     */
    public function getName()
    {
        return $this->category_name;
    }

    /**
     * Set name model
     * @param $name
     */
    public function setName($category_name)
    {
        if (isset($category_name)) {
            $this->category_name = $category_name;
        }
    }

    /**
     * Get content model
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content model
     * @param $content
     */
    public function setContent($content)
    {
        if (isset($content)) {
            $this->name = $content;
        }
    }
}
