<?php
namespace App\Entity;

class Task
{
    protected $task;
    protected $dueDate;
    protected $checkBox;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    public function getCheckBox()
    {
        return $this->checkBox;
    }

    public function setCheckBox($checkBox)
    {
        $this->task = $checkBox;
    }
}
