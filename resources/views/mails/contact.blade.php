@component('mail::message')
# Formularz kontaktowy ze strony ADOS

Dla miasta: {{ $city }}

### Imię:
{{ $name }}

### E-mail:
{{ $email }}

### Wiadomość:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
