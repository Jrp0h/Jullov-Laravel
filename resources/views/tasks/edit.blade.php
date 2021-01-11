@extends("layouts.app")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            Task Details
        </div>
        <div class="card-body">
            <form action="{{ route("tasks.update", ["task" => $task]) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        value="{{ old("name", $task->name) }}">

                    @error("name")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="30"
                        rows="10">{{ old("description", $task->description) }}</textarea>

                    @error("description")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Day</label>
                    <select class="form-control" name="day" id="day">
                        @foreach(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"] as $day)
                        <option @if(old("day", $task->day)==$day) selected @endif>{{ $day }}</option>
                        @endforeach
                    </select>
                    @error("day")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="done" class="form-label">Done</label>
                    <input type="checkbox" name="done" id="done" @if($task->done) checked @endif>
                    @error("done")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
    </div>
</div>
@endsection
