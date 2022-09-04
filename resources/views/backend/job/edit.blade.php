@extends('backend.layouts.app')
@section('title','Edit Jobs')
@section('admin-user-active','mm-active')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>
                    Edit Jobs
                </div>
            </div>
        </div>
    </div>
    <div class="content pt-3">
        <div class="card">
            <div class="card-body">
                <form id="updateJob" name="updateJob" class="jobForm" onsubmit="return false">
                    @csrf
                    <input type="hidden" name="job_id" id="job_id" value="{{ $job->id }}">
                    <div class="form-group">
                        <label for="">Position</label>
                        <input id="position" value="{{ $job->position }}" type="text" name="position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Job Description</label>
                        <textarea id="job_description" value="{{ $job->job_description }}" type="text" name="job_description" class="form-control">{{ $job->job_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Job Requirements</label>
                        <textarea id="job_requirements" value="{{ $job->job_requirements }}" type="text" name="job_requirements" class="form-control">{{ $job->job_requirements }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input id="location" value="{{ $job->location }}" type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Required Employee</label>
                        <input id="required_employee" value="{{ $job->required_employee }}" type="text" name="required_employee" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary mr-3 back-btn">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="updateBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\UpdateJob','#updateJob') !!}
    <script>
        $(function() {
             $('#updateBtn').click(function (e) {
                                 e.preventDefault();

                let id = $('#job_id').val();
                let position = $('#position').val();
                let job_description = $('#job_description').val();
                let job_requirements = $('#job_requirements').val();
                let location = $('#location').val();
                let required_employee = $('#required_employee').val();

                var data = {
                    position: position,
                    job_description: job_description,
                    job_requirements: job_requirements,
                    location: location,
                    required_employee: required_employee,
                };

                $.ajax({
                    data: data,
                    url: '/admin/job/' + id,
                    type: "PUT",
                    dataType: 'json',
                    success: function (data) {
                        Swal.fire(
                            data.success
                        )
                        .then((result) => {
                            console.log(result);
                            if (result.isConfirmed) {
                                window.location.replace('{{route("admin.job.index")}}');
                            }
                        })
                    },

                });

            });
        } );
    </script>
@endsection
