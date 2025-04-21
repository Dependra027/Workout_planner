<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Workout</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6e7c7c, #2f3b3b);
            margin: 0;
            padding: 20px;
            color: black;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            gap: 30px;
            justify-content: space-between;
        }

        .form-container, .log-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 50%;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .form-container:hover, .log-container:hover {
            transform: scale(1.02);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 50%;
            padding: 8px 12px;
            border-radius: 8px;
            border: 2px solid #ddd;
            font-size: 0.9rem;
            background-color: #f4f4f4;
            transition: all 0.3s ease;
            margin-bottom: 12px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
            background-color: #fff;
        }

        textarea {
            resize: vertical;
            height: 50px;
        }

        .workout-container {
            flex-grow: 1;
            overflow-y: auto;
            max-height: 400px;
            margin-bottom: 16px;
        }

        .workout {
            background: #f9f9f9;
            padding: 12px;
            margin-top: 12px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .workout:hover {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        button {
            margin-top: 16px;
            padding: 10px 16px;
            font-size: 0.9rem;
            border: none;
            border-radius: 8px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #218838;
        }

        button[type="button"] {
            background-color: #007bff;
        }

        button[type="button"]:hover {
            background-color: #0056b3;
        }

        .success-message,
        .error-message {
            max-width: 800px;
            margin: 16px auto;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 1rem;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
        }

        .log-card {
            background: #ffffff;
            max-width: 800px;
            margin: 16px auto;
            border: 1px solid #ddd;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .log-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: center;
            font-size: 0.9rem;
        }

        table th {
            background-color: white;
        }

        table td {
            background-color: white;
        }

        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }

            .form-container, .log-container {
                width: 100%;
            }

            table th, table td {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Form to log a workout -->
    <div class="form-container">
        <h2>Log Your Workout</h2>
        <form action="{{ route('log-workout') }}" method="POST">
            @csrf

            <div class="input-group">
                <label for="workout_plan_name">Workout Plan Name</label>
                <input type="text" name="workout_plan_name" id="workout_plan_name" required>
            </div>

            <div class="input-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" required>
            </div>

            <div class="input-group">
                <label for="duration">Session Duration (minutes)</label>
                <input type="number" name="duration" id="duration" required>
            </div>

            <label>Workouts</label>
            <div id="workouts-container" class="workout-container">
                <div class="workout">
                    <label>Workout Name</label>
                    <input type="text" name="workouts[0][name]" required>
                    <label>Sets</label>
                    <input type="number" name="workouts[0][sets]" required>
                    <label>Reps</label>
                    <input type="number" name="workouts[0][reps]" required>
                </div>
            </div>

            <button type="button" onclick="addWorkout()">Add Workout</button>

            <div class="input-group">
                <label for="notes">Notes</label>
                <textarea name="notes" id="notes"></textarea>
            </div>

            <button type="submit">Log Workout</button>
        </form>
    </div>

    <!-- Display Submitted Logs -->
    <div class="log-container">
        <h2>Workout Logs</h2>
        @foreach ($logs as $log)
            <div class="log-card">
                <!-- Delete Form -->
                <form action="{{ route('log-workout.destroy', $log->id) }}" method="POST" onsubmit="return confirm('Delete this workout log?');" style="text-align: right; margin-bottom: 10px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #dc3545; color: white; padding: 6px 12px; border: none; border-radius: 6px; cursor: pointer;">
                        Delete
                    </button>
                </form>

                <h3>{{ $log->workout_plan_name }} - {{ $log->date }}</h3>
                <p><strong>Duration:</strong> {{ $log->duration }} minutes</p>
                <p><strong>Notes:</strong> {{ $log->notes ?: 'N/A' }}</p>

                @if ($log->workout_details->isNotEmpty())
                    <table>
                        <thead>
                            <tr>
                                <th>Workout Name</th>
                                <th>Sets</th>
                                <th>Reps</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log->workout_details as $workout)
                                <tr>
                                    <td>{{ $workout->name }}</td>
                                    <td>{{ $workout->sets }}</td>
                                    <td>{{ $workout->reps }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No workouts recorded for this log.</p>
                @endif
            </div>
        @endforeach
    </div>
</div>

<!-- JavaScript to add new workouts dynamically -->
<script>
    let workoutCount = 1;

    function addWorkout() {
        const container = document.getElementById('workouts-container');
        const workoutDiv = document.createElement('div');
        workoutDiv.classList.add('workout');
        workoutDiv.innerHTML = `
            <label>Workout Name</label>
            <input type="text" name="workouts[${workoutCount}][name]" required>
            <label>Sets</label>
            <input type="number" name="workouts[${workoutCount}][sets]" required>
            <label>Reps</label>
            <input type="number" name="workouts[${workoutCount}][reps]" required>
        `;

        container.appendChild(workoutDiv);
        workoutCount++;
    }
</script>

</body>
</html>
