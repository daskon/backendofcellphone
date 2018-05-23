@component('mail::message')
# Introduction

Thanks for signing up. We really appreciate it. Please confirm us your email by clicking the following link.

@component('mail::button', ['url' => 'http://www.sellmycell.lk/login'])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
Team
@endcomponent
