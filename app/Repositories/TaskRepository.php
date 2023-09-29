<?php
namespace App\Repositories;
use App\Models\Task;
use App\Interfaces\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface 
{
    public function showTasks(){
        return Task::orderBy('created_at', 'desc')->get();
    }

    public function viewTask($item_id){
        return Task::findOrFail($item_id);
    }

    public function Create( array $details){
        return Task::create($details);
    }

    public function Update($item_id , array $new_details){
        return Task::where('id',$item_id)->update($new_details);
    }

    public function Delete($item_id){
        return Task::destroy($item_id);
    }
}