<?php

class TaskController extends Controller
{
    private $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository();
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        $this->view('tasks/index', ['tasks' => $tasks]);
    }

    public function create()
    {
        $this->view('tasks/create');
    }

    public function store()
    {
        $taskName = $_POST['task'] ?? '';
        if (!empty($taskName)) {
            $this->taskRepository->addTask($taskName);
        }
        header('Location: /tasks');
        exit;
    }

    public function delete($id)
    {
        if (!empty($id)) {
            $this->taskRepository->deleteTask($id);
        }
        header('Location: /tasks');
        exit;
    }
}
