@component('mail::message')
# Sourcing Maklon

Dear all user


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
