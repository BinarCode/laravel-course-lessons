@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'http://school.binarcode.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
