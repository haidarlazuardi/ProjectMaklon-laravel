@component('mail::message')
# Sourcing Maklon

Dear all user

PKP xxxx telah di approve ,kunjungi link berikut untuk melihat detail
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
