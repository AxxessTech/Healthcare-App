@component('mail::message')
# License Expiring

Hello {{ $caregiver->name }}, your license {{ $caregiver->license_number }} is expiring in {{ $caregiver->license_expiration->diffInDays() }} days!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
