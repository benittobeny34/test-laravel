@auth
<div class="link-header">
                <div class="link-title">Top 5 tags <span class="arrow">&rarr;</span></div>
                <div class="links">
                    <li>Python</li>
                    <li>java</li>
                    <li>PHP</li>
                </div>
</div>

<div class="link-header">
                <div class="link-title">Recent Posts <span class="arrow">&rarr;</span></div>
                <div class="links">
                    @foreach($latestposts as $post)
                    <li>{{$post->title}}</li>
                    @endforeach
                </div>
</div>
@endauth