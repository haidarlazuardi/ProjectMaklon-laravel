@component('mail::message')
# Sourching Maklon Online

Dear all user

Ada pkp Mulai berjalan silahkan tekan tombol move page
untuk melihat detail pkp

@component('mail::button', ['url' => ''])
Move Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
