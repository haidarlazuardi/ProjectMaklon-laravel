@component('mail::message')
# Sourcing Maklon

Dear all user

Dokumen Legalitas telah di submit ,silahkan kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
