@extends("layouts.app")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            Task Details
        </div>
        <div class="card-body">
            <form action="{{ route("tasks.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        value="{{ old("name") }}">

                    @error("name")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="30"
                        rows="10">{{ old("description") }}</textarea>

                    @error("description")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Day</label>
                    <select class="form-control" name="day" id="day">
                        @foreach(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"] as $day)
                        <option @if(old("day")==$day) selected @endif>{{ $day }}</option>
                        @endforeach
                    </select>
                    @error("day")
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add">
            </form>
        </div>
    </div>
</div>
@endsection
