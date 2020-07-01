<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /*
     * Show All Tasks
     * */
    public function index()
    {
        return view('tasks');
    }

    /*
     * Store New Task
     * */
    public function store()
    {
        //xu li
    }

    /*
     * Delete Task By id
     * */
    public function destroy($id)
    {
        //xu li
    }

}
