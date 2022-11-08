<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post.clubname' => 'required|string|between:1,14',
            'post.activity' => 'required|string|max:150',
            'post.condition' => 'required|string|max:150',
            'image' => 'required|mimes:jpeg,png',
            'post.place' => 'required',
        ];
    }
}
