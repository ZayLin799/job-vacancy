@extends('backend.layouts.app')
@section('title', 'Jobs')
@section('admin-user-active', 'mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Jobs</div>
        </div>
    </div>
</div>

<div class="pt-3">
    <a href="{{route('admin.job.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Jobs</a>
</div>

<div class="content py-3">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered Datatable">
                <thead>
                    <tr class="bg-light">
                        <th>Position</th>
                        <th>Job Description</th>
                        <th>Job Requirements</th>
                        <th>Location</th>
                        <th>Required Employee</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var table = $('.Datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/admin/job/datatable/ssd",
            columns: [
                {
                    data: "position",
                    name: "position",
                },
                {
                    data: "job_description",
                    name: "job_description",
                },
                {
                    data: "job_requirements",
                    name: "job_requirements"
                },
                {
                    data: "location",
                    name: "location"
                },
                {
                    data: "required_employee",
                    name: "required_employee",
                },
                {
                    data: "action",
                    name: "action",
                    searchable: false,
                    sortable: false
                },
            ]
        });

        $(document).on('click', '.delete', function(e){
            e.preventDefault();

            var id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure, you want to delete?',
                showCancelButton: true,
                confirmButtonText: `Confirm`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url : '/admin/job/' + id,
                        type : 'DELETE',
                        success: function(){
                            table.ajax.reload();
                        }
                    });
                }
            })
        });

    } );

</script>
@endsection
