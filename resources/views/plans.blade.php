@extends('layouts.app')

@section('title', 'Workout Plans')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Workout Plans</h1>

    <!-- Full Body Workout -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-heart-pulse-fill"></i> Full Body Workout (Weekly)
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Monday:</strong> Push-ups, Squats, Plank</li>
                <li><strong>Tuesday:</strong> Dumbbell Rows, Lunges, Crunches</li>
                <li><strong>Wednesday:</strong> Burpees, Resistance Band Rows, Mountain Climbers</li>
                <li><strong>Thursday:</strong> Rest</li>
                <li><strong>Friday:</strong> Jump Squats, Bicep Curls, Side Lunges</li>
                <li><strong>Saturday:</strong> Resistance Band Chest Press, Crunches, Push-ups</li>
                <li><strong>Sunday:</strong> Jogging, Dumbbell Shoulder Press, Plank</li>
            </ul>
        </div>
    </div>

    <!-- Full Body Exercises Table -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-heart-pulse-fill"></i> Full Body Exercises (Sets and Reps)
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Exercise</th>
                        <th>Video</th>
                        <th>Sets</th>
                        <th>Reps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Push-ups</td>
                        <td><a href="https://www.youtube.com/watch?v=IODxDxX7oi4" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>15-20</td>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td><a href="https://www.youtube.com/watch?v=aclHkVaku9U" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Plank</td>
                        <td><a href="https://www.youtube.com/watch?v=pSHjTRCQxIw" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>30-60 sec</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Rows</td>
                        <td><a href="https://www.youtube.com/watch?v=pYcpY20QaE8" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>10-12</td>
                    </tr>
                    <tr>
                        <td>Lunges</td>
                        <td><a href="https://www.youtube.com/watch?v=QOVaHwm-Q6U" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15 per leg</td>
                    </tr>
                    <tr>
                        <td>Crunches</td>
                        <td><a href="https://www.youtube.com/watch?v=7U-8WQAZcVw" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>20-30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Push Workout -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-success text-white">
            <i class="bi bi-arrow-up-circle-fill"></i> Push Workout Plan
        </div>
        <div class="card-body">
            <ul>
                <li>Push-ups</li>
                <li>Shoulder Press</li>
                <li>Tricep Dips</li>
                <li>Chest Press</li>
                <li>Lateral Raises</li>
                <li>Overhead Dumbbell Press</li>
            </ul>
        </div>
    </div>

    <!-- Push Exercises Table -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-success text-white">
            <i class="bi bi-arrow-up-circle-fill"></i> Push Exercises (Sets and Reps)
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Exercise</th>
                        <th>Video</th>
                        <th>Sets</th>
                        <th>Reps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Push-ups</td>
                        <td><a href="https://www.youtube.com/watch?v=IODxDxX7oi4" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>15-20</td>
                    </tr>
                    <tr>
                        <td>Shoulder Press</td>
                        <td><a href="https://www.youtube.com/watch?v=B-aVuyhvLHU" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                    <tr>
                        <td>Tricep Dips</td>
                        <td><a href="https://www.youtube.com/watch?v=0326dy_4f6I" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>10-12</td>
                    </tr>
                    <tr>
                        <td>Chest Press</td>
                        <td><a href="https://www.youtube.com/watch?v=5o1ISq9kv68" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td><a href="https://www.youtube.com/watch?v=kDqklk1ZESo" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pull Workout -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-danger text-white">
            <i class="bi bi-arrow-down-circle-fill"></i> Pull Workout Plan
        </div>
        <div class="card-body">
            <ul>
                <li>Resistance Band Rows</li>
                <li>Bicep Curls</li>
                <li>Reverse Fly</li>
                <li>Deadlifts (if possible)</li>
                <li>Pull-aparts with Bands</li>
                <li>Renegade Rows</li>
            </ul>
        </div>
    </div>

    <!-- Pull Exercises Table -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-danger text-white">
            <i class="bi bi-arrow-down-circle-fill"></i> Pull Exercises (Sets and Reps)
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Exercise</th>
                        <th>Video</th>
                        <th>Sets</th>
                        <th>Reps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Resistance Band Rows</td>
                        <td><a href="https://www.youtube.com/watch?v=An7ED8Bdb_g" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                    <tr>
                        <td>Bicep Curls</td>
                        <td><a href="https://www.youtube.com/watch?v=ykJmrZ5v0Oo" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                    <tr>
                        <td>Reverse Fly</td>
                        <td><a href="https://www.youtube.com/watch?v=ZmdtFiHlEyw" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>12-15</td>
                    </tr>
                    <tr>
                        <td>Deadlifts</td>
                        <td><a href="https://www.youtube.com/watch?v=op9kVnSso6Q" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>8-10</td>
                    </tr>
                    <tr>
                        <td>Renegade Rows</td>
                        <td><a href="https://www.youtube.com/watch?v=d0kR-dDfbAY" target="_blank">Video</a></td>
                        <td>3</td>
                        <td>10-12</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Weekly Routine -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-dark text-white">
            <i class="bi bi-calendar-week-fill"></i> Weekly Routine by Level
        </div>
        <div class="card-body">
            <h5>Beginner</h5>
            <p>Mon-Wed-Fri: Full Body Light Intensity<br>Sun: Walk / Stretching</p>

            <h5>Intermediate</h5>
            <p>Mon: Push | Tue: Pull | Wed: Legs | Thu: Cardio | Fri: Full Body | Sat: Rest | Sun: Active Rest</p>

            <h5>Advanced</h5>
            <p>Mon: Push | Tue: Pull | Wed: Legs | Thu: Push | Fri: Pull | Sat: Legs | Sun: Rest</p>
        </div>
    </div>

    <!-- BMI Chart -->
    <div class="card mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-info text-white">
            <i class="bi bi-bar-chart-fill"></i> BMI Chart
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Category</th>
                        <th>BMI Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Underweight</td><td>&lt; 18.5</td></tr>
                    <tr><td>Normal Weight</td><td>18.5 – 24.9</td></tr>
                    <tr><td>Overweight</td><td>25 – 29.9</td></tr>
                    <tr><td>Obesity</td><td>30 or greater</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Diet Recommendations -->
    <div class="card mb-5 animate__animated animate__fadeInUp">
        <div class="card-header bg-warning text-dark">
            <i class="bi bi-egg-fried"></i> Diet Recommendations
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Protein:</strong> Eggs, Chicken, Tofu, Paneer</li>
                <li><strong>Carbs:</strong> Brown rice, Quinoa, Oats</li>
                <li><strong>Fats:</strong> Nuts, Seeds, Olive oil</li>
                <li><strong>Pre-workout:</strong> Banana, Peanut Butter Toast</li>
                <li><strong>Post-workout:</strong> Protein Shake, Boiled Eggs</li>
            </ul>
        </div>
    </div>
</div>
@endsection
