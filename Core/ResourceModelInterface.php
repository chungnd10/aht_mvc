<?php

namespace App\Core;

/**
 * Interface ResourceModelInterface
 * @package App\Core
 */
interface ResourceModelInterface
{
    /**
     * @param $table_name
     * @param $id
     * @param $model
     * @return mixed
     */
    public function _init($table_name, $id, $model);

    /**
     * Store a newly created resource in storage.
     * @param $model
     * @return bool
     */
    public function add($model);

    /**
     * Update the specified resource.
     * @param int $id
     *
     * @return bool
     */
    public function edit($id, $model);

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return bool
     */
    public function delete($id);

    /**
     * Get the specified resource
     * @param $id
     * @return array
     */
    public function get($id);

    /**
     * Get all specified resources
     * @return array
     */
    public function getAll();
}
