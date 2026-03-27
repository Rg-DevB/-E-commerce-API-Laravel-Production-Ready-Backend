<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'slug' => [
                'required',
                'string',
                'max:255'
            ],
            'description' => [
                'required',
                'string'
            ],
            'status' => [
                'required',
                'integer'
            ],
            'popular' => [
                'required',
                'boolean'
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:2048'
            ],
            'meta_title' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string'
            ],
            'meta_keywords' => [
                'required',
                'string'
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'slug.required' => 'Slug is required',
            'description.required' => 'Description is required',
            'status.required' => 'Status is required',
            'popular.required' => 'Popular is required',
            'meta_title.required' => 'Meta title is required',
            'meta_description.required' => 'Meta description is required',
            'meta_keywords.required' => 'Meta keywords is required',
        ];
    }
}
