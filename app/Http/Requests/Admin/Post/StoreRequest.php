<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',


        ];
    }
    public function messages()
    {
        return [
            'title.required' => "",
            'title.string' => "",
            'content.required' => "",
            'content.string' => "",
            'preview_image.required' => "",
            'preview_image.file' => "",
            'main_image.required' => "",
            'main_image.file' => "",
            'category_id.required' => "",
            'category_id.integer' => "",
            'category_id.exists' => "",
            'tag_ids.array' => "",


        ];
    }
}
