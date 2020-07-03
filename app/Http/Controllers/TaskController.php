<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    /*
     * Show All Tasks
     * */
    public function index()
    {
        $data['tasks'] = Task::all();

        return view('tasks', $data);
    }

    /*
     * Store New Task
     * */
    public function store(TaskRequest $request)
    {
        $task['name'] = $request->input('name');
        Task::create($task);
        Session::flash('message', trans('tasks.added'));
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('tasks.index');
    }

    /*
     * Delete Task By id
     * */
    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            Session::flash('message', trans('tasks.deleted'));
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('tasks.index');
        } catch (ModelNotFoundException $e) {

            return view(404);
        }
    }

    /*
     * Change language
     * */
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

}
