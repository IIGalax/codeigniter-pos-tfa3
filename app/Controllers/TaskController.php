<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        return view('tasks/welcome', [
            'tasks' => $taskModel->getTodayTasks()
        ]);
    }

    public function taskList()
    {
        $taskModel = new TaskModel();

        return view('tasks/list', [
            'tasks' => $taskModel->getAllTasks()
        ]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        return view('tasks/profile', [
            'user' => $userModel->first()
        ]);
    }

    public function about()
    {
        return view('tasks/about');
    }
}