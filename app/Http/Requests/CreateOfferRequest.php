<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOfferRequest extends FormRequest
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
            'name'      => ['required', 'string'],
            'en_name'   => ['required', 'string'],
            'discount'  => ['required', 'numeric', 'max:1'],
            'expire_at' => ['required', 'date'],
            'products'  => ['nullable', 'array'],
            'products.*.product_id' => ['required', 'exists:products,id']
        ];
    }
}
