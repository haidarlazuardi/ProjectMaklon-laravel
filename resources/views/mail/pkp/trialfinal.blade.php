@component('mail::message')
# Sourcing Maklon

Dear all user

Dokumen trial pkp berikut sudah final ,silahkan kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
