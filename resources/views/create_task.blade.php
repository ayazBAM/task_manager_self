<x-header />
<div class="container">
    <div class="border rounded shadow p-3 mt-5">
        <h3 class="text-center">Create Task</h3>
        <form>
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="text" class="form-control shadow-sm" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <textarea name="description" class="form-control shadow-sm"  cols="30" rows="5"></textarea>
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="exampleCheck1">status</label>
                <input type="checkbox" class="form-check-input shadow-sm" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<x-footer />