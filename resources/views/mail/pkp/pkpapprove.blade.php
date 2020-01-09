@component('mail::message')
# Sourcing Maklon

Dear all user

PKP xxxx telah di approve, Dengan keterangan sebagai berikut :
@foreach ($introLines as $line)
<p>{{$line}}</p>
@endforeach

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
