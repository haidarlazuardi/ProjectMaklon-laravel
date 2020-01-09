@component('mail::message')

# Sourching Maklon

Dear all user

terdapat perubahan pada pkp,dan membuat perubahan terhadap tahapan pkp lainnya
mohon agar para user untuk submit & approve ulang data yang telah masuk

@foreach ($introLines as $line)
<p>{{$line}}</p>

@endforeach

@component('mail::button', ['url' => ''])
Move Page
@endcomponent

Thanks,Admin<br>
{{ config('app.name') }}
@endcomponent
