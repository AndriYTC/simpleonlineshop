<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
          'title' => 'required|max:200',
            'body' => 'required'
        ];
    }
    public function messages()
    {
        return [
        'title.required' => 'Email wajib diisi !!',
        'body.required' => 'Pesan harus diisi !!'];
    }
}