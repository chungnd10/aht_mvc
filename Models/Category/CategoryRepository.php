<?php

namespace App\Models\Category;

/**
 * Class CategoryRepository
 * @package App\Models\Category
 */
class CategoryRepository
{
    /**
     * @var CategoryRepository
     */
    private $resourceModel;

    /**
     * TaskRepository constructor.
     */
    public function __construct()
    {
        $this->resourceModel = new CategoryResourceModel();
    }

    /**
     * Store a newly created resource in storage.
     * @param $model
     * @return bool
     */
    public function add($model)
    {
        return $this->resourceModel->add($model);
    }

    /**
     * Update the specified resource.
     * @param $id
     * @param $model
     * @return bool
     */
    public function edit($id, $model)
    {
        return $this->resourceModel->edit($id, $model);
    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        return $this->resourceModel->delete($id);
    }

    /**
     * Get the specified resource
     * @param $id
     * @return array
     */
    public function get($id)
    {
        return $this->resourceModel->get($id);
    }

    /**
     * Get all specified resources
     * @return array
     */
    public function getAll()
    {
        return $this->resourceModel->getAll();
    }
}
