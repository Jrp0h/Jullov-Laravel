@extends("layouts.app")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            Task Details
        </div>
        <div class="card-body">
            <h3>{{$task->name}}</h3>
            <p>{{$task->description}}</p>
            <p>{{$task->day}}</p>
            @if($task->done)
            <p><b>Done</b></p>
            @else
            <p><b>Not Done</b></p>
            @endif
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route("tasks.edit", ["task" => $task]) }}" class="btn btn-secondary">Edit</a>
                </div>
                <div class="col text-right">
                    <form action="{{route("tasks.destroy", ["task" => $task])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
