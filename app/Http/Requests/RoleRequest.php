<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => (request()->isMethod('PATCH'))? 'required|unique:roles,name,'. request()->route('role')->id : 'required|unique:roles,name',
            'guard_name' => 'required',
        ];
    }
}
