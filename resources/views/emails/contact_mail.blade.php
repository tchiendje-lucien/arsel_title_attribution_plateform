@component('mail::message')
# Bonjour !!!

Vous avez reçu un mail de la part de M/Mme {{ $data['nom_internaute'] }} {{ $data['prenom_internaute'] }}
({{ $data['email_internaute'] }}) et repondant au numero de téléphone {{ $data['phone_internaute'] }}
<br>
message
{{  $data['message_internaute']  }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
