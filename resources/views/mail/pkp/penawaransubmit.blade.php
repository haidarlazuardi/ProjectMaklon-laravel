@component('mail::message')
# Sourcing Maklon

Dear all user

Dokumen Penawaran Telah di submit ,Dimohon pihak terkait untuk segera follow up
kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
