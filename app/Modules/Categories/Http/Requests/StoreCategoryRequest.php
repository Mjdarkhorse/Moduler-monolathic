<?php

namespace App\Modules\Categories\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * No authentication in this learning project, so everyone may call it.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Input validation rules for creating a category.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', 'unique:categories,name'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
