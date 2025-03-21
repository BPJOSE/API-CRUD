<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:students,email,' . $this->route('student'),
            'phone' => 'required|digits:10',
            'language' => 'required|in:English,Spanish,French',
        ];
    }
}

