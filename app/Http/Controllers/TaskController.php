<?php

namespace App\Http\Controllers;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class TaskController extends Controller
{

    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function CreateTask(Request $request)
    {
        $validated_data = $request->validate([
            'title' => 'required|string',
            'description'=> 'required|string',
        ]);
        
        $this->taskRepository->Create($validated_data);
        
        return redirect('/')->with('alert','Task Ceated Successfully');
    }

    public function showTasks()
    {
        $tasks =  $this->taskRepository->showTasks();
        return view('index',compact('tasks'));
    }

    public function viewTask($id)
    {
        $task = $this->taskRepository->viewTask($id);
        return view('view',compact('task'));
    }

    public function UpdateTask(Request $request , $id)
    {
        $details = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status
        ];
        $this->taskRepository->Update($id, $details);
        return redirect('/')->with('alert','Task Updated');
    }

    public function DeleteTask($id)
    {
        $this->taskRepository->Delete($id);

        return back()->with('alert','Task Deleted Successfully');
    }
}
