<?php

namespace App\Core;

use App\Config\Database;

/**
 * Class ResourceModel
 * @package App\Core
 */
class  ResourceModel implements ResourceModelInterface
{
    /**
     * @var $table_name
     */
    private $table_name;

    /**
     * @var $id
     */
    private $id;

    /**
     * @var $model
     */
    private $model;

    /**
     * @param $table_name
     * @param $id
     * @param $model
     */
    public function _init($table_name, $id, $model)
    {
        $this->table_name = $table_name;
        $this->id = $id;
        $this->model = $model;
    }

    /**
     * Store a newly created resource in storage.
     * @param $model
     * @return bool
     */
    public function add($model)
    {
        $model_str = "";
        $value_str = "";
        foreach ($model as $key => $value) {
            $model_str .= $key . ", ";
            $value_str .= "\"" . $value . "\", ";
        }
        $sql = "INSERT INTO " . $this->table_name . " ( " . $model_str . " created_at ) VALUES (" . $value_str . " NOW() )";
        $request = Database::getBdd()->prepare($sql);
        return $request->execute();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @param $model
     * @return bool
     */
    public function edit($id, $model)
    {
        $content = "";
        foreach ($model as $key => $value) {
            $content .= $key . "= \"" . $value . "\", ";
        }
        $sql = "UPDATE " . $this->table_name . " SET " . $content . " updated_at = NOW() WHERE id = :id";
        $request = Database::getBdd()->prepare($sql);
        return $request->execute([
            'id' => $id
        ]);

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = " . $id;
        $request = Database::getBdd()->prepare($sql);
        return $request->execute([$id]);
    }

    /**
     * Get the specified resource
     * @param int $id
     * @return array
     */
    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id =" . $id;
        $request = Database::getBdd()->prepare($sql);
        $request->execute();
        return $request->fetch();
    }

    /**
     * Get all specified resources
     * @return array
     */
    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        $request = Database::getBdd()->prepare($sql);
        $request->execute();
        return $request->fetchAll();
    }

}
