<div class="col-md-2 col-lg-2 col-xs-12 sidebar-right">
            <div class="link-header">
                <div class="link-title">Top 5 tags <span class="arrow">&rarr;</span></div>
                <div class="links">
                    @foreach($tags as $tag)
                       <a href="{{route('tagposts',[$tag->id])}}"><li>{{$tag->name}}</li></a>
                    @endforeach
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Recent Posts <span class="arrow">&rarr;</span></div>
                <div class="links">
                    @foreach($latestposts as $post)
                    <a href="{{url('home/'.$post->id)}}"><li>{{$post->title}}</li></a>
                    @endforeach
                </div>
            </div>
            
</div>