<x-mail::message>
# Introduction

Bonjour Vous avez recu un mail de la part de {{$data->name}} avec le mail {{$data->email}}

Message : {{$data->message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
