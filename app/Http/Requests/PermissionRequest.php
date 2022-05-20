<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'role_id'  => 'required|array|exists:roles,id',
            'name' => (request()->isMethod('PATCH'))? 'required|unique:permissions,name,'. request()->route('permission')->id : 'required|unique:permissions,name',
            'guard_name' => 'required',
        ];
    }
}
