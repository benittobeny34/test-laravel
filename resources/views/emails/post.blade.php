@component('mail::message')

# {{ $details['title'] }}

  

Post Created Successfully. 

   

@component('mail::button', ['url' => $details['url']])

View  Post

@endcomponent

   

Thanks,<br>

Mallow

@endcomponent
