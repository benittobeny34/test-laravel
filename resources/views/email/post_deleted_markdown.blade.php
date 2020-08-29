@component('mail::message')
# Post Deleted
{{$post->title}}

@component('mail::panel')
{{$post->description}}
@endcomponent

The above post have no longer access

Thanks,<br>
Mallow
@endcomponent
