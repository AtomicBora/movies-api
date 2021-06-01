<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
    {   // title, director, duration i releaseDate su required
        // duration mora biti broj između 1 i 500
        // imageUrl mora biti URL
        // Film sa istim title i releaseDate ne može biti dva puta dodat u bazu
        return [
            'title' => 'required|unique:movies|string',
            'director' => 'required|string',
            'duration' => 'required|integer|between:1, 500',
            'releaseDate' => 'required|unique:movies|date',
            'imageUrl' => 'URL'
        ];
    }
}
