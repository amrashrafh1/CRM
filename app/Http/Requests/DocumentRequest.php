<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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

        $mimes = 'mimes:jpg,jpeg,png,gif,pdf,doc,docx,txt,xls,xlsx,odt,dot,html,htm,rtf,ods,xlt,csv,bmp,odp,pptx,ppsx,ppt,potm';
        return [
            'name' => 'required|string|max:255',
            'file' => 'required|'.$mimes,
            'type_id' => 'required|exists:document_type,id',
            'status' => 'sometimes|nullable|boolean',
            'publish_date' => 'required|date',
            'expiration_date' => 'required|date'
        ];
    }

}
