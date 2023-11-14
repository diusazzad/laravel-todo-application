<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // You can retrieve any necessary data for the dashboard here
        $userData = auth()->user(); // Example: Get the authenticated user data

        // Return the dashboard view with the retrieved data
        return view('dashboard', compact('userData'));
    }
}
