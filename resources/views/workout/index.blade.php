@extends('layouts.app')

@section('title', 'Plan Your Workout')

@section('content')
<div class="plan-header text-center mb-5">
    <h1>📝 Plan Your Workout</h1>
    <p class="lead">Customize your daily workout routine and track your progress!</p>
</div>

@if(session('message'))
    <div class="alert alert-success text-center">{{ session('message') }}</div>
@endif

<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ url('/add-workout') }}" method="POST" class="workout-form p-4 shadow">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="workout_name" class="form-control" placeholder="Workout Name" required>
                </div>
                <div class="col-md-4">
                    <input type="number" name="reps" class="form-control" placeholder="Reps" required>
                </div>
                <div class="col-md-4">
                    <input type="number" name="sets" class="form-control" placeholder="Sets" required>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success px-4">Add Workout</button>
            </div>
        </form>
    </div>
</div>

@if(count($workouts) > 0)
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h3 class="text-center mb-4">Your Workout Plan</h3>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Workout Name</th>
                        <th>Reps</th>
                        <th>Sets</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workouts as $index => $workout)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $workout['name'] }}</td>
                            <td>{{ $workout['reps'] }}</td>
                            <td>{{ $workout['sets'] }}</td>
                            <td>
                                <form action="{{ url('/delete-workout/' . $index) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="summary text-center my-4">
                <p><strong>Total Workouts:</strong> {{ $totalWorkouts }}</p>
                <p><strong>Total Reps:</strong> {{ $totalReps }}</p>
                <p><strong>Total Sets:</strong> {{ $totalSets }}</p>
            </div>

            <form action="{{ url('/clear-workouts') }}" method="POST" class="text-center">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Clear All</button>
            </form>
            

        </div>
    </div>
    <!-- New buttons after Clear All -->
<div class="text-center mt-4">
    <a href="{{ url('/workouts') }}" class="btn btn-primary me-2">View All Workouts</a>
    <a href="{{ route('log-workout') }}" class="btn btn-secondary">Log a Workout</a>
</div>

@endif
@endsection
