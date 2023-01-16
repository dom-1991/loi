<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportSaveOutRequest extends FormRequest
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
            'date' => 'required|date_format:d/m/Y',
            'amount' => 'required|min:1000|numeric',
            'image' => 'nullable|image|mimes:jpg,JPG,png,PNG,jpeg,JPEG,gif,GIF,svg,SVG|max:10240'
        ];
    }
}
