<x-header>
    @section('title','View Task')
</x-header>
<div class="container">
    <div class="border rounded shadow p-3 my-5">
        <h3 class="text-center">Update Task</h3>
        <form class="px-5" method="POST" action="/update-task/{{ $task['id'] }}">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="text" name="title" value="{{ $task['title'] }}" class="form-control shadow-sm" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <textarea name="description" class="form-control shadow-sm"  cols="30" rows="5">{{ $task['description'] }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="exampleCheck1">status</label>
                <input type="number" name="status" max="1" min="0" value="{{ $task['status'] }}" class="form-control shadow-sm" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
<x-footer />