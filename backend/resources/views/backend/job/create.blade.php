@extends('backend.layouts.app')
@section('title','Create Jobs')
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
                    Create Jobs
                </div>
            </div>
        </div>
    </div>
    <div class="content pt-3">
        <div class="card">
            <div class="card-body">
                <form id="createJob" name="createJob" class="jobForm" onsubmit="return false">
                    @csrf
                    <input type="hidden" name="job_id" id="job_id" value="">
                    <div class="form-group">
                        <label for="">Position</label>
                        <input id="position" value="" type="text" name="position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Job Description</label>
                        <textarea id="job_description" value="" type="text" name="job_description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Job Requirements</label>
                        <textarea id="job_requirements" value="" type="text" name="job_requirements" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input id="location" value="" type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Required Employee</label>
                        <input id="required_employee" value=""type="text" name="required_employee" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary mr-3 back-btn">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\Storejob','#createJob') !!}
<script>
        $(function() {
            $('#saveBtn').click(function (e) {
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
                    url: "{{ route('admin.job.store') }}",
                    type: "POST",
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
