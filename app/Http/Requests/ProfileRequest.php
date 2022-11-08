<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'profile.name' => 'required|string|between:1,14',
            'image_name' => 'required|mimes:jpeg,png',
            'profile.sport' => 'required|string|max:150',
            'profile.profile' => 'required|string|max:150',
        ];
    }
}
