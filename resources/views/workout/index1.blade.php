<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Filter</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f3f5;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            max-width: 600px;
            margin: auto;
            display: grid;
            gap: 15px;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        button {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        button:last-of-type {
            background-color: #007BFF;
            margin-left: 10px;
        }

        button:last-of-type:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 30px auto 0;
            max-width: 600px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        ul li {
            padding: 16px 20px;
            border-bottom: 1px solid #e0e0e0;
            font-size: 1.1rem;
            color: #333;
            transition: background 0.3s ease;
        }

        ul li:last-child {
            border-bottom: none;
        }

        ul li:hover {
            background: #f8f9fa;
        }
    </style>
</head>
<body>

<form action="{{ url('/workouts/filter') }}" method="GET">
    <div>
        <label for="type">Workout Type</label>
        <select name="type">
            <option value="strength">Strength</option>
            <option value="cardio">Cardio</option>
        </select>
    </div>

    <div>
        <label for="intensity">Intensity</label>
        <select name="intensity">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
    </div>

    <div>
        <label for="duration">Max Duration (minutes)</label>
        <input type="number" name="duration" value="60">
    </div>

    <div style="display: flex; justify-content: flex-start;">
        <button type="submit">Filter Workouts</button>
        <!-- <button type="button" onclick="location.href='{{ url('/workouts/logs')}}'">Logs</button> -->
    </div>
</form>

<ul> 
    @if($workouts)
        @foreach($workouts as $workout)
            <li>{{ $workout->name }} ({{ $workout->type }} - {{ $workout->intensity }})</li>
        @endforeach
    @endif
</ul>

</body>
</html>
