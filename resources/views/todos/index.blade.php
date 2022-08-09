@extends('app')

@section('content')
<div class="container w-25 border mt-4 p-4">
    <form>
        <div class="mb-3">
            <label for="taskTitle" class="form-label">Task title:</label>
            <input type="text" id="taskTitle" name="taskTitle" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create new task</button>
    </form>
</div>
@endsection