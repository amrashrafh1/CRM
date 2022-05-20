<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => (request()->isMethod('PATCH')) ? 'required|string|email|max:255|unique:users,email,' . request()->route('user')->id : 'required|string|email|max:255|unique:users',
            'password' => (request()->isMethod('PATCH')) ? 'sometimes|nullable|string|min:6|confirmed' : 'required|string|min:6|confirmed',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'string|max:191',
            'permissions' => 'array|exists:permissions,id',
            'position_title' => 'string|max:191',
        ];
    }
}
