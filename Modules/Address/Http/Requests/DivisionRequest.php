<?php

namespace Modules\Address\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DivisionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'POST'){
            return [
                'name' => "required|unique:divisions,name"
            ];
        }else{
            return [
                'name' => "required|unique:divisions,name,{$this->division->id}",
            ];
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
