<?php

namespace App\Http\Controllers\Backend;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJob;
use App\Http\Requests\UpdateJob;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.job.index');
    }

    public function ssd(){
        $data = Job::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($each) {$edit_icon = '<a href="' . route('admin.job.edit', $each->id) . '" class="text-warning"><i class="fas fa-edit"></i></a>';
                            $delete_icon = '<a href="#" class="text-danger delete" data-id="' . $each->id . '"><i class="fas fa-trash-alt"></i></a>';
                            return '<div class="action-icon">' . $edit_icon . $delete_icon . '</div>';
                        })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJob $request)
    {
        $job = new Job();
        $job->position = $request['position'];
        $job->job_description = $request['job_description'];
        $job->job_requirements = $request['job_requirements'];
        $job->location = $request['location'];
        $job->required_employee = $request['required_employee'];
        $job->save();

        return response()->json(['success'=>'Job saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('backend.job.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateJob $request, $id)
    {

        Log::info($request);
        Log::info($id);
        $job = Job::findOrFail($id);
        $job->position = $request['position'];
        $job->job_description = $request['job_description'];
        $job->job_requirements = $request['job_requirements'];
        $job->location = $request['location'];
        $job->required_employee = $request['required_employee'];
        $job->update();

        return response()->json(['success'=>'Job updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return response()->json(['success'=>'Job Deleted successfully.']);
    }
}
