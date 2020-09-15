
<div class="col-md-2 col-lg-2 col-xs-12 sidebar-left">
    @auth
            <div class="dashboard">
                <span>DASHBOARD</span>
            </div>
            <div class="link-header">
                <div class="link-title">Post Option <span class="arrow">&rarr;</span></div>
                <div class="links">
                    <a href="{{route('addpost')}}"><li>Create post</li></a>
                   <a href="{{url('/home')}}"> <li>View All Post</li></a>
                    
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Top Tags<span class="arrow">&rarr;</span></div>
                <div class="links">
                    @foreach($tags as $tag)
                       <a href="{{route('tagposts',[$tag->id])}}"><li>{{$tag->name}}</li></a>
                    @endforeach
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Activity <span class="arrow">&rarr;</span></div>
                <div class="links">
                  <a href="{{route('your-posts')}}"> <li>View Your Post</li></a>
                    <a href="#" disabled><li>Your Comments</li></a>
                    <a href="/chats" disabled><li>View in chats</li></a>
                </div>
            </div> 
        @endauth          
</div>
