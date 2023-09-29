<?php
namespace App\Interfaces;

interface TaskRepositoryInterface
{
    public function showTasks();
    public function viewTask($item_id);
    public function Create( array $details);
    public function Update($item_id , array $new_details);
    public function Delete($item_id);
}