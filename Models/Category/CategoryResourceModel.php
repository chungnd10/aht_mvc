<?php

namespace App\Models\Category;

use App\Core\ResourceModel;

/**
 * Class CategoryResourceModel
 * @package App\Models\Category
 */
class CategoryResourceModel extends ResourceModel
{
    /**
     * @var
     */
    protected $resourceModel;

    /**
     * CategoryResourceModel constructor.
     */
    public function __construct()
    {
        $category = new ResourceModel();
        $this->_init('categories', 'id', $category);
    }
}
