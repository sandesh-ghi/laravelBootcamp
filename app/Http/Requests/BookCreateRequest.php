<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'pageCount'=>'required|integer',
            'point'=>'required|integer',
        ];
    }
    public function messages(): array
    {
        return ['name.required'=>'please enter name',
//            'name.alpha'=>'please enter alphabet in name',
            'pageCount.required'=>'please enter number',
            'point.required'=>'please enter number',

        ];
    }
}
