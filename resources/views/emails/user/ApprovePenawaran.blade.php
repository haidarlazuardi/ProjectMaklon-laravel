@component('mail::message')
# Sourching Maklon Online

Please check the  **link**

@component('mail::button', ['url' => 'http://sourchingmaklononline/dashboard'])
view sourching Maklon
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
