@component('mail::message')
 # Sourcing Maklon

Dear all user

Dokumen Legalitas sudah terverifikasi dan di Approve , Silahkan kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
