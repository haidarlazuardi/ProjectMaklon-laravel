@component('mail::message')
# Sourcing Maklon

Dear team Pro

Ada pkp baru yang perlu di follow up ,silahkan klik link berikut

@component('mail::button', ['url' => ''])
Visit Link
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
