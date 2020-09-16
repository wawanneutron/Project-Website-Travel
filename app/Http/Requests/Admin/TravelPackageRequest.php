<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class TravelPackageRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:225',
            'location' => 'required|max:225',
            'about' => 'required',
            'culture' => 'required|max:225',
            'canton' => 'required|max:225',
            'deperture_date' => 'required|date',
            'duration' => 'required|max:225',
            'type' => 'required|max:225',
            'price' => 'required|integer'
        ];
    }
}
