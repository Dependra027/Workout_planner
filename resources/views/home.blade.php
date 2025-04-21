@extends('layouts.app')

@section('title', 'Home - Workout Companion')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <div class="container text-center text-white animate__animated animate__fadeInDown">
            <h1 class="display-4 fw-bold">Welcome to Your Workout Planner</h1>
            <p class="lead">Track progress, plan routines, and achieve your fitness goals—all in one place.</p>
            <a href="{{ route('planYourWorkout') }}" class="btn btn-light btn-lg mt-3">Start Planning</a>
        </div>
    </div>
</section>

<!-- Motivation Section -->
<section class="motivation-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="/images/motivation.jpg" alt="Fitness Motivation" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold">Transform Your Body, Transform Your Life</h2>
                <p class="lead">Fitness isn’t just about lifting weights. It’s about pushing yourself beyond limits, staying consistent, and achieving mental clarity.</p>
                <ul class="list-unstyled mt-4">
                    <li><i class="bi bi-check-circle text-success"></i> Personalized routines</li>
                    <li><i class="bi bi-check-circle text-success"></i> Progress tracking tools</li>
                    <li><i class="bi bi-check-circle text-success"></i> Diet & recovery support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Features Section (No Background) -->
<section class="features-section py-5">
    <div class="container text-center">
        <h2 class="mb-4">Why Use Our Planner?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-box p-3 shadow-sm animate__animated animate__zoomIn">
                    <i class="bi bi-graph-up-arrow display-5 text-primary"></i>
                    <h4 class="mt-3">Track Progress</h4>
                    <p>Monitor sets, reps, and weight to stay accountable and measure gains.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box p-3 shadow-sm animate__animated animate__zoomIn">
                    <i class="bi bi-pencil-square display-5 text-success"></i>
                    <h4 class="mt-3">Custom Plans</h4>
                    <p>Create personalized full body, push-pull, or leg workouts suited to your fitness level.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box p-3 shadow-sm animate__animated animate__zoomIn">
                    <i class="bi bi-calendar-check display-5 text-danger"></i>
                    <h4 class="mt-3">Stay Consistent</h4>
                    <p>Build discipline with scheduled routines and printable/exportable plans.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section class="tools-section bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4">Helpful Tools</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="{{ route('bmi') }}" class="text-decoration-none text-dark">
                    <div class="tool-box p-3 shadow-sm animate__animated animate__fadeInUp">
                        <i class="bi bi-person-fill-up display-6 text-primary"></i>
                        <h5 class="mt-2">BMI Chart</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('bmi') }}" class="text-decoration-none text-dark">
                    <div class="tool-box p-3 shadow-sm animate__animated animate__fadeInUp">
                        <i class="bi bi-fire display-6 text-danger"></i>
                        <h5 class="mt-2">TDEE Calculator</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('bmi') }}" class="text-decoration-none text-dark">
                    <div class="tool-box p-3 shadow-sm animate__animated animate__fadeInUp">
                        <i class="bi bi-nut-fill display-6 text-success"></i>
                        <h5 class="mt-2">Diet Planner</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('bmi') }}" class="text-decoration-none text-dark">
                    <div class="tool-box p-3 shadow-sm animate__animated animate__fadeInUp">
                        <i class="bi bi-cup-straw display-6 text-info"></i>
                        <h5 class="mt-2">Water Intake</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="{{ route('bmi') }}" class="text-decoration-none text-dark">
                    <div class="tool-box p-3 shadow-sm animate__animated animate__fadeInUp">
                        <i class="bi bi-list-check display-6 text-warning"></i>
                        <h5 class="mt-2">Workout Split Generator</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="testimonials-section py-5 bg-white">
    <div class="container text-center">
        <h2 class="mb-4">Real Transformations</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <blockquote class="blockquote">
                        <p class="mb-4">"This planner helped me stay disciplined and finally lose 10kg in 3 months!"</p>
                        <footer class="blockquote-footer">Rohit S., Student</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                        <p class="mb-4">"Great tools for someone who’s not a gym expert. Everything is so clear!"</p>
                        <footer class="blockquote-footer">Megha R., Homemaker</footer>
                    </blockquote>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- Community Stats Section -->

<!-- Newsletter Section -->
<section class="newsletter-section bg-dark text-white py-5">
    <div class="container text-center">
        <h2 class="mb-3">Stay Updated!</h2>
        <p>Get fitness tips, diet guides, and special tools straight to your inbox.</p>
        <form class="row g-3 justify-content-center mt-3">
            <div class="col-md-4">
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100" type="submit">Subscribe</button>
            </div>
        </form>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section bg-dark text-white text-center py-5">
    <div class="container animate__animated animate__fadeInUp">
        <h2>Start Planning Like a Pro</h2>
        <p>Create your personalized routine and use our smart tools to stay on track!</p>
        <a href="{{ route('planYourWorkout') }}" class="btn btn-primary btn-lg mt-2">Plan Your Workout Now</a>
    </div>
</section>

@endsection
