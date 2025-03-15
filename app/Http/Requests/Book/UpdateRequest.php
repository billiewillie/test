<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:4096',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Введите название книги',
            'author.required' => 'Введите имя автора',
            'year.required' => 'Введите год издания',
            'year.integer' => 'Год издания должен быть числом',
            'image.required' => 'Выберите изображение',
            'image.mimes' => 'Изображение должно быть в формате: jpeg, png, jpg',
            'image.max' => 'Изображение не должно превышать 4MB',
        ];
    }
}
