<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:product_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно.',
            'title.string' => 'Поле должно быть строкой.',
            'title.max' => 'Поле не должно превышать :max символов.',
            'parent_id.exists' => 'Выбранная категория не существует.',
        ];
    }
}
