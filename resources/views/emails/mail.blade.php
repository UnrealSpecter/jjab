@component('mail::message')

# A New Email has Arrived!

email
@component('mail::panel')
    {{ $request['email'] }}
@endcomponent

content
@component('mail::panel')
    {{ $request['body'] }}
@endcomponent
