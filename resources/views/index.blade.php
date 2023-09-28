<x-header />
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 >Task List</h2>
        <button type="button" class="btn btn-primary btn-sm">Create Task</button>
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
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                   <td> <button type="button" class="btn btn-primary btn-sm me-2">View</button> 
                    <button type="button" class="btn btn-danger btn-sm">Delete</button> </td>
                </tr>
            </tbody>
        </table>
</div>
<x-footer />