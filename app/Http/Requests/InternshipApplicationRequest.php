<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternshipApplicationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',

            'institution' => 'required',
            'degree' => 'required',
            'major' => 'required',
            'year' => 'required',
            'gpa' => 'required',
            'graduation' => 'required|date',

            'department' => 'required',
            'duration' => 'required',
            'start_date' => 'required|date',
            'internship_type' => 'required',

            'skills' => 'required',
            'experience' => 'nullable',
            'motivation' => 'required',

            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ];
    }
}
