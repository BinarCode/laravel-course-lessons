@component('mail::message')

Hi {{ $user->first_name  }},

This is a welcome email!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
