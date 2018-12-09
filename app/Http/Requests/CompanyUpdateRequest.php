<?php

namespace App\Http\Requests;

use App\Rules\EmailCompanyUpdate;
use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'email' => ['required','email', new EmailCompanyUpdate],
            'telephone' => 'required|numeric|min:100000000',
            'schedule' => 'required|date_format:"H:i',
            'address' => 'required|min:6',
        ];
    }
}
