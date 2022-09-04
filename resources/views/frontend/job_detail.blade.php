@extends('frontend.layouts.app')

@section('content')
<div class="container">

    <div class="container" id="change_nav">
        <div class="col py-2" id="job-list">
          <div class="row p-4">
            <div class="col-12 pb-4 d-flex justify-content-center">
              <h2>
                {{ $jobs->position }}
              </h2>
            </div>
            <div class="col-12">
                <h4>Job Description</h4>
                <p>
                    {{ $jobs->job_description }}
                </p>
            </div>
            <div class="col-12">
                <h4>Job Requirements</h4>
                <p>
                    {{ $jobs->job_requirements }}
                </p>
            </div>
            <div class="col-12">
                <h4>Location</h4>
                <p>
                    {{ $jobs->location }}
                </p>
            </div>
            <div class="col-12">
                <h4>Required Employee</h4>
                <p>
                    {{ $jobs->required_employee }}
                </p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
