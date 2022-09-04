<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJob extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $id = $this->route('job');
        return [
            'position' => 'required',
            'job_description' => 'required',
            'job_requirements' => 'required',
            'location' => 'required',
            'required_employee' => 'required'
        ];
    }
}
