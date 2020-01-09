@component('mail::message')
# Sourcing Maklon

Dear all user

Pkp telah di Freeze ,kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
