<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentPartialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|max:255',
            'email' => 'sometimes|email|unique:students,email,' . $this->route('student'),
            'phone' => 'sometimes|digits:10',
            'language' => 'sometimes|in:English,Spanish,French',
        ];
    }
}

