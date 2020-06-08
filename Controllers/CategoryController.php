<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Category\CategoryRepository;

/**
 * Class CategoryController
 * @package App\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
    }

    /**
     * Render views index category
     */
    function index()
    {
        $data['categories'] = $this->categoryRepository->getAll();
        $this->set($data);
        $this->render("index");
    }

    /**
     * Store category
     */
    function create()
    {
        if (isset($_POST["category_name"])) {
            if ($this->categoryRepository->add($_POST)) {
                header("Location: " . WEBROOT . "category/index");
            }
        }
        $this->render("create");
    }

    /**
     * Edit category
     * @param $id
     */
    function edit($id)
    {
        $data["category"] = $this->categoryRepository->get($id);
        if (isset($_POST["category_name"])) {
            if ($this->categoryRepository->edit($id, $_POST)) {
                header("Location: " . WEBROOT . "category/index");
            }
        }
        $this->set($data);
        $this->render("edit");
    }

    /**
     * Remove category
     * @param $id
     */
    function delete($id)
    {
        $task = $this->categoryRepository->delete($id);
        if ($task == true) {
            header("Location: " . WEBROOT . "category/index");
        }
    }

}
