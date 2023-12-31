<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JPR extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:1',
            'feature_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required|min:1',
            'roles' => 'required|min:1',
            'job_type' => 'required',
            'address' => 'required',
            'date' => 'required',
            'salary' => 'required'
        ];
    }
}
