<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'assigned_to' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'owner' => 'required',
            'phone' => 'required',
            'due_to' => 'required',
            'description' => 'required'
        ]);

        $newTask = new Task([
            'task' => $request->post('task'),
            'assigned_to' =>$request->post('assigned_to'),
            'brand' => $request->post('brand'),
            'model' => $request->post('model'),
            'year' => $request->post('year'),
            'owner' => $request->post('owner'),
            'phone' => $request->post('phone'),
            'due_to' => $request->post('due_to'),
            'description' => $request->post('description'),
            'status' => 'Neatlikta'
        ]);

        $newTask->save();

        return redirect('/uzduociu-valdymas');
    }

    public function deleteTask($id)
    {
        $task = DB::table('tasks')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function editTask(Request $request, $id)
    {
        $request->validate([
            'task' => 'required',
            'assigned_to' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'owner' => 'required',
            'phone' => 'required',
            'due_to' => 'required',
            'description' => 'required'
        ]);

        DB::table('tasks')->where('id', $id)->update([
            'task' => $request->post('task'),
            'assigned_to' =>$request->post('assigned_to'),
            'brand' => $request->post('brand'),
            'model' => $request->post('model'),
            'year' => $request->post('year'),
            'owner' => $request->post('owner'),
            'phone' => $request->post('phone'),
            'due_to' => $request->post('due_to'),
            'description' => $request->post('description'),
        ]);

        return redirect('/uzduociu-valdymas');
    }

    public function completeTask($id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'status' => 'Atlikta'
        ]);

        return redirect()->back();
    }
}
