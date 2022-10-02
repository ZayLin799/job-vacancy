@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Jobs</h3>

    </div>
    <div class="ontainer-fluid p-4" id="change_nav">
        <div class="row justify-content-center align-items-center">
            @foreach ($jobs as $job)
                <div class="card recent_job" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->position }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $job->location }}</h6>
                        <a href="{{ route('jobDetail',$job->id) }}" class="card-link">See More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $jobs->links() }}
</div>
@endsection
