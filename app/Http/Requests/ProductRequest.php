<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class ProductRequest extends FormRequest
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
        // Получаем ID продукта, если это обновление
        $productId = null;

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $product = Product::where('slug', $this->route('product'))->first();
            $productId = optional($product)->id;
        }

        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . ($productId ?? 'NULL'),
            'description' => 'nullable|string',
            'category_id' => 'required|exists:product_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно.',
            'title.string' => 'Поле должно быть строкой.',
            'slug.required' => 'Поле обязательно.',
            'slug.string' => 'Поле должно быть строкой.',
            'slug.unique' => 'Такой slug уже существует.',
            'description.string' => 'Поле должно быть строкой.',
            'category_id.required' => 'Поле обязательно.',
            'category_id.exists' => 'Выбранная категория не существует.',
        ];
    }
}
