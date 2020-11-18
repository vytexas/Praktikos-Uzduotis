<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            if ($request->user()->type == 1) {
                return view('pages.admin.main')->with('userName', $request->user()->name);
            } else {
                return view('pages.user.main')->with('userName', $request->user()->name);
            }
        } else {
            return redirect('/login');
        }
    }

    public function createTaskPage()
    {
        $users = DB::table('users')->select('name')->where('type', '0')->get();

        return view('pages.admin.create-task')->with('users', $users);
    }

    public function taskControlPage()
    {
        $tasks = DB::table('tasks')->paginate(11);

        return view('pages.admin.task-control')->with('tasks', $tasks);
    }

    public function editTaskPage($id)
    {
        $users = DB::table('users')->select('name')->where('type', '0')->get();

        $task = DB::table('tasks')->where('id', $id)->first();

        return view('pages.admin.edit-task')->with('task', $task)->with('users', $users);
    }

    public function myTask(Request $request)
    {
        $myTask = DB::table('tasks')->where('assigned_to', $request->user()->name)->paginate('11');

        return view('pages.user.my-task')->with('myTask', $myTask);
    }
}
