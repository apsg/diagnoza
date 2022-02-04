@component('mail::message')
# Formularz kontaktowy ze strony ADOS

Dla miasta: {{ $city }}

### Imię:
{{ $name }}

### E-mail:
{{ $email }}

### Telefon:
{{ $phone }}

### Wiadomość:
{{ nl2br($message) }}

<br>
{{ config('app.name') }}
@endcomponent
