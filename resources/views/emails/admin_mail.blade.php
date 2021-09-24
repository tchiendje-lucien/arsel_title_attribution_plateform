@component('mail::message')
# Salut M/Mme {{ $data['name'] }} {{ $data['prenom'] }}!!!


Un compte a été creer pour vous au sein de notre plateforme avec pour identifiant
email: {{ $data['email'] }}
mot de passe: {{ $data['password'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
