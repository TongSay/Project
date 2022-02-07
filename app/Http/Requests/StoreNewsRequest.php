<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
        $rules = [
            'title_en' => 'required',
            
           
        ];

        foreach (config('app.available_locales') as $locale) 
        {
            $rules['title_' . $locale] = 'string';
            
            $rules['content_' . $locale] = 'string';
        }

        return $rules;
    }
}
