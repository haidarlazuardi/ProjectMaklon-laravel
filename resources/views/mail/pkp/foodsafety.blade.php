@component('mail::message')
# Sourcing Maklon

Dear All user

Dokumen Food safety telah di approve

@component('mail::button', ['url' => ''])
Visit link
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
