<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'release_date' => 'required|date',
            'category_id' => ['required', 'exists:category,id'],
            'image' => 'nullable|image|max:2048',
        ];
    }
    public function attributes(): array
    {
        return [
            'category_id' => 'category',
        ];
        
    }
}
