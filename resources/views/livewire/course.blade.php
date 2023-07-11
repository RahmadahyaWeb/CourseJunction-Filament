<div>
    <div class="row mb-4">
        <div class="col-md-12">
            <input type="text" class="form-control rounded-0 shadow-sm" wire:model="search" placeholder="Search course">
        </div>
    </div>

    <div class="row">
        @if ($courses->count() > 0)
            @foreach ($courses as $course)
                <div class="col-md-6 mb-3">
                    <a href="{{ route('courses.show', $course) }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0 border-start border-5 border-danger rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $course->title }}
                                </h5>
                                <p class="card-subtitle mb-2 text-body-secondary">
                                    {{ date('d F Y', strtotime($course->created_at)) }}
                                </p>
                                <p class="card-text">
                                    {{ $course->shortDesc() }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <x-404></x-404>
        @endif
    </div>

    <div class="row my-3">
        <div class="col-12 justify-content-center d-flex">
            {{ $courses->links() }}
        </div>
    </div>
</div>
