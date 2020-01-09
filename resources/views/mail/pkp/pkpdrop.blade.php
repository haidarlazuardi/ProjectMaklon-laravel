@component('mail::message')
# Sourcing Maklon

Dear  all user

PKP telah di drop ,kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
