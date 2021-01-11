@extends("layouts.app")

@section("content")
<div class="m-4">
    <div class="row">
        <div class="col-sm-6">
            <h1>Tasks</h1>
        </div>
        <div class="col-sm-6 text-right">
            <a href="{{ route("tasks.create") }}" class="btn btn-outline-secondary">Add New Task</a>
        </div>
    </div>
    <div class="custom-grid">

        @foreach($tasks as $day => $values)
        <div class="card">
            <div class="card-header">
                {{ $day }}
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">

                    @foreach($values as $task)

                    <li class="list-group-item">
                        <a href="{{ route("tasks.show", ["task" => $task]) }}" @if($task->done) class="done" @endif
                            >{{ $task->name }}</a>
                    </li>

                    @endforeach

                </ul>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
