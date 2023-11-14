<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function upcoming()
    {
        // Logic to retrieve upcoming tasks
        return view('tasks.upcoming');
    }

    public function today()
    {
        // Logic to retrieve tasks for today
        return view('tasks.today');
    }

    public function calendar()
    {
        // Logic to retrieve tasks for the calendar
        return view('tasks.calendar');
    }

    public function stickyWall()
    {
        // Logic to retrieve tasks for the sticky wall
        return view('tasks.sticky_wall');
    }
}
