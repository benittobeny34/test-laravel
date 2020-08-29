@component('mail::message')
# {{$details['subject']}}

@component('mail::panel')
 {{$details['title']}},<br>
 {{$details['body']}}
@endcomponent

@component('mail::button', ['url' => $details['url'],'color' => 'success'])
 View Post
@endcomponent

Thanks,<br>
Mallow
@endcomponent
