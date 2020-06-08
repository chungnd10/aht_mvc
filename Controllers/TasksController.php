<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Task\TaskRepository;

/**
 * Class TasksController
 * @package App\Controllers
 */
class TasksController extends Controller
{
    /**
     * @var TaskRepository
     */
    protected $taskRepository;

    /**
     * TasksController constructor.
     */
    public function __construct()
    {
        $this->taskRepository = new TaskRepository();
    }

    /**
     * Render views index tasks
     */
    function index()
    {
        $data['tasks'] = $this->taskRepository->getAll();
        $this->set($data);
        $this->render("index");
    }

    /**
     * Store tasks
     */
    function create()
    {
        if (isset($_POST["title"])) {
            if ($this->taskRepository->add($_POST)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("create");
    }

    /**
     * Edit tasks
     * @param $id
     */
    function edit($id)
    {
        $data["task"] = $this->taskRepository->get($id);
        if (isset($_POST["title"])) {
            if ($this->taskRepository->edit($id, $_POST)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($data);
        $this->render("edit");
    }

    /**
     * Remove tasks
     * @param $id
     */
    function delete($id)
    {
        $task = $this->taskRepository->delete($id);
        if ($task == true) {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
