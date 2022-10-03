<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
            'phone'   => 'sometimes|string',
//            'age'     => 'required|in:dorosly,dziecko',
//            'wywiad'  => 'required|in:tak,nie',
        ];
    }
}
