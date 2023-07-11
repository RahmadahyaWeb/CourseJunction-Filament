@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-md-start text-center order-1 order-md-0">
                <h1 class="fw-bold hero-title">
                    Course Junction
                </h1>
                <p>Expand Your Knowledge for Free</p>
                <a href="" class="btn btn-danger rounded-0">
                    Find a Course
                </a>
            </div>
            <div class="col-md-6 order-0 order-md-1 mb-3">
                <img src="{{ asset('img/hero.svg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section id="about" class="py-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 mb-5">
                <h1 class="text-center">
                    About Course Junction
                </h1>
            </div>
            <div class="col-md-6 mb-3">
                <img src="{{ asset('img/about.svg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>What is Course Junction?</h3>
                <p>
                    Course Junction is an innovative online platform that revolutionizes the way individuals access and
                    engage with educational content.
                </p>
                <p>
                    At its core, Course Junction serves as a central hub where learners can
                    seamlessly connect with a diverse array of courses from renowned institutions and experts.
                </p>
                <p>
                    With a strong
                    commitment to democratizing education, Course Junction offers a vast selection of free courses that
                    empower individuals to embark on a transformative learning journey.
                </p>
            </div>

        </div>
    </section>
@endsection
