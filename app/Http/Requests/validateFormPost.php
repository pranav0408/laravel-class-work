<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        // return false; -> no one can access it
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
            "fname"=>"required",
            "lname"=>"required",
            "email"=>"required",
            "mobile"=>"required | numeric | min:10",
            "pass"=>"required | min:5 | max:10",
            "cpass"=>"required | min:5 | max:10 | same:pass",
            "details"=>"required"
        ];
    }
    public function messages()
    {
        return [
            "fname.required"=>"Please enter First Name",
            "lname.required"=>"Please enter Last Name",
            "email.required"=>"Please enter Email",
            "mobile.required"=>"Please enter Mobile Number",
            "mobile.numeric"=>"Mobile Number Should be only a number",
            "pass.required"=>"Please Enter Password",
            "pass.min"=>"Password should be of length 5-10",
            "pass.max"=>"Password should be of length 5-10",
            "cpass.required"=>"Mobile Number Should be only a number",
            "cpass.min"=>"Confirm Password should be of length 5-10",
            "cpass.max"=>"Confirm Password should be of length 5-10",
            "cpass.same"=>"Mobile Number Should be only a number",
            "details.required"=>"Mobile Number Should be only a number",
        ];
    }
}
