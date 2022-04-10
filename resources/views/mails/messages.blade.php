@component('mail::message')
# New message
<p>Email{{ $contact['email']}}</p>

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
