@extends('layouts.app')

@section('content')
    <div class="row my-4">
        <div class="col-12 mb-3">
            <div class="card shadow-sm border-0 border-start border-5 border-danger rounded-0">
                <div class="card-body">
                    <h3 class="card-title">
                        {{ $course->title }}
                    </h3>
                    <p class="card-subtitle mb-2 text-body-secondary">
                        {{ date('d F Y', strtotime($course->created_at)) }}
                    </p>
                    <hr>
                    <p class="card-text">
                        {!! $course->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0 border-start border-5 border-danger rounded-0">
                <div class="card-body">
                    <h3 class="card-title">
                        Table of contents
                    </h3>
                    <hr>
                    @foreach ($courseMaterials as $material)
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-{{ $material->id }}"
                                        aria-expanded="false" aria-controls="flush-{{ $material->id }}">
                                        {{ $material->title }}
                                    </button>
                                </h2>
                                <div id="flush-{{ $material->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="ratio ratio-16x9 mb-3">
                                            <iframe src="{{ $material->embed_link }}" title="YouTube video"
                                                allowfullscreen></iframe>
                                        </div>
                                        <a href="{{ $material->embed_link }}" class="mb-3">
                                            Alternative link for the course video
                                        </a>
                                        {!! $material->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
