<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function personal()
    {
        // Logic to retrieve personal lists
        return view('lists.personal');
    }

    public function work()
    {
        // Logic to retrieve work lists
        return view('lists.work');
    }

    public function list1()
    {
        // Logic to retrieve List 1
        return view('lists.list1');
    }

    public function addNew()
    {
        // Logic to add a new list
        return view('lists.add_new');
    }
}
