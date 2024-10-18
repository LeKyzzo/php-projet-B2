<?php

class TaskRepository {
    private $tasks = [];
    private $nextId = 1;

    public function getAllTasks() {
        return $this->tasks;
    }

    public function addTask($name) {
        $task = new Task($this->nextId++, $name);
        $this->tasks[] = $task;
    }

    public function deleteTask($id) {
        foreach ($this->tasks as $index => $task) {
            if ($task->id == $id) {
                unset($this->tasks[$index]);
                break;
            }
        }
    }
}
