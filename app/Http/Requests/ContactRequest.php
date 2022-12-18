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
            'phone'   => 'nullable|string',
//            'age'     => 'required|in:dorosly,dziecko',
//            'wywiad'  => 'required|in:tak,nie',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Proszę podać imię',
            'email.*'          => 'Proszę podać prawidłowy adres email',
            'message.required' => 'Brak wiadomości. W czym możemy Ci pomóc?',
        ];
    }
}
