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
            'tag_ids.*' => 'integer|exists:tags,id',
        ];
    }

    public function messages()
    { return [
        'title.required' => 'ЭЙ, а название где?',
        'title.string' => 'ТОЛЬКО СТРОКА!!!1111',
        'content.required' => 'Нужно добавить какой-то контент!',
        'preview_image.required' => 'Нужно загрузить превью!',
        'main_image.required' => 'Нужно загрузить картинку!',
        'category_id.required' => 'Выберите категорию!',
    ];
    }
}
