<x-header>
    @section('title','Task-list')
</x-header>

<div class="container mt-5">
    @if ($message = Session::get('alert'))
    <div class="w-50 text-center alert alert-success alert-block mt-2">	
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="d-flex justify-content-between align-items-center">
        <h2 >Task List</h2>
        <a role="button" href="/create-task" class="btn btn-primary btn-sm">Create Task</a>
    </div>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th >#</th>
                    <th >Title</th>
                    <th >Description</th>
                    <th >Status</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>       
                @foreach ($tasks as $task )
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $task->title }}</td>
                    <td>{{Str::limit($task->description,20) }}</td>
                    <td>{{ $task->status == 1 ? 'Completed':'Pending' }}</td>
                   <td> <a role="button" href="/view-task/{{ $task->id }}" class="btn btn-primary btn-sm me-2">view</a>
                    <a role="button" href="/delete-task/{{ $task->id }}" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                @endforeach                     
            </tbody>
        </table>
</div>
<x-footer />