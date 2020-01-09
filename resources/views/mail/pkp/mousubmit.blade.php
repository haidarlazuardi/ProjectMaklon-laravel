@component('mail::message')
# Sourcing Maklon

Dear all user

Dokumen Mou telah disubmit ,silahkan kunjungi link berikut untuk melihat detail

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
