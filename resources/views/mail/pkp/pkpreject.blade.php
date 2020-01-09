@component('mail::message')
# Sourcing Maklon

Dear all user

PKP telah di reject dengan alasan sebagai berikut
-
kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
