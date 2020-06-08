<?php
namespace App\Models\Task;

use App\Core\ResourceModel;

/**
 * Class TaskResourceModel
 * @package App\Models\Task
 */
class TaskResourceModel extends ResourceModel
{

    /**
     * TaskResourceModel constructor.
     */
    public function __construct()
    {
        $task = new ResourceModel();
        $this->_init('tasks', 'id', $task);
    }
}
