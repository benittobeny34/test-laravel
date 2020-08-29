@component('mail::message')
# Post Created

{{$post->title}}.

@component('mail::panel')
 {{$post->description}}
@endcomponent

@component('mail::button', ['url' => 'http://127.0.0.1:8000/home/'.$post->id])
view Post
@endcomponent

Thanks,<br>
Mallow
@endcomponent
