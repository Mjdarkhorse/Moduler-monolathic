<?php

namespace App\Modules\Categories\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Input validation rules for updating a category.
     * Fields are optional ("sometimes"), but if sent they must be valid.
     */
    public function rules(): array
    {
        return [
            'name' => [
                'sometimes',
                'required',
                'string',
                'max:100',
                // Unique, but ignore the category being updated itself.
                Rule::unique('categories', 'name')->ignore($this->route('id')),
            ],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
