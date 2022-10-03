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

@if($wywiad)
    Czy wywiad możliwy online? {{ $wywiad }}
@endif

@if($age)
    Wiek osoby badanej: {{ $age }}
@endif

<br>
{{ config('app.name') }}
@endcomponent
