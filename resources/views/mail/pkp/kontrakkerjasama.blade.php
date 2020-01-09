@component('mail::message')
 # Sourcing Maklon

Dear all user

Kontrak kerjasama telah di submit ,silahkan Kunjungi link berikut untuk detail

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
