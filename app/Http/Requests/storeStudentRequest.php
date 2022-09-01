<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeStudentRequest extends FormRequest
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
            'numdoc' => 'required|integer',
            'docident' => 'required|mimes:pdf',
            'fecexp' => 'required:nullable|date',
            'nombres' => 'required|max:45',
            'priapelli' => 'required:string|max:45',
            'fecnacimiento' => 'required:nullable|date'
        ];
    }
}
