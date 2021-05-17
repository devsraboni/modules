<?php

namespace Modules\Address\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistrictRequest extends FormRequest
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
                'name' => "required|unique:districts,name",
                'division_id' => "required",
            ];
        }else{
            return [
                'name' => "required|unique:districts,name,{$this->district->id}",
                'division_id' => "required",
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
