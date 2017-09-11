<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTicketFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $routeId = $this->route('ticketId');
        $formId = $this->get('inputId');

        return $routeId == $formId;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputId' => 'required',
            'inputEmail' => 'email',
            'inputTitle' => 'required',
            'inputDescription' => 'required'
        ];
    }
}
