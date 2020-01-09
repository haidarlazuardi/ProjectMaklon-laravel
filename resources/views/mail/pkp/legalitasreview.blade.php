@component('mail::message')
# Sourcing Maklon

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
