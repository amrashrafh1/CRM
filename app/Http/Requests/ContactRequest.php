<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'middle_name' => 'sometimes|string|max:255',
            'last_name' => 'required|string|max:255',
            'status' => 'required|in:leads,opportunity,won,closed',
            'referral_source' => 'sometimes|string|max:255',
            'position_title' => 'sometimes|string|max:255',
            'industry' => 'sometimes|string|max:255',
            'project_type' => 'sometimes|string|max:255',
            'company' => 'sometimes|string|max:255',
            'project_description' => 'sometimes|string',
            'description' => 'sometimes|string',
            'budget' => 'sometimes|string|max:255',
            'website' => 'sometimes|string|max:255',
            'linkedin' => 'sometimes|string|max:255',
            'address_street' => 'sometimes|string|max:255',
            'address_city' => 'sometimes|string|max:255',
            'address_state' => 'sometimes|string|max:255',
            'address_country' => 'sometimes|string|max:255',
            'address_zipcode' => 'sometimes|string|max:255',
            'phones' => 'required|array',
            'emails.*' => 'required|email',
        ];
    }
}
