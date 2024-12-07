<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //GET /tasks
    {
    return Task::with('project','user')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request) //POST /tasks
    
    {
        Log::debug($request->all());
        $task = new Task($request->all());
        // $task-> task_name = $request->task_name;
        // $task-> task_description = $request->task_description;
        // $task-> task_is_done = $request->task_is_done;
        $task->save();
        return $task;
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task ) //GET /tasks/{id}
    
    {
    //    $task = Task::findOrfail($id);
       return $task->load('project','user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task) //PUT /tasks/{id}
    {
        // $task->task_name = $request->task_name ?? $task->task_name; ;
        // $task->task_description = $request->task_description ?? $task->task_description;
        // $task->task_is_done = $request->task_is_done ?? $task->task_is_done;
        $task->update($request->all());
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task) //DELETE /tasks/{id} el nombre de la variable debe ser el mismo del path param en la ruta
    {
        $task->delete();
        return response()->json ([
            'message' => 'Task deleted',
            'task' => $task
        ], 200);

    }
}
