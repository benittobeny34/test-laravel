
@auth
<div class="dashboard">
    <span>
        <a href="{{route('home.index')}}">
            Dashboard
        </a>
    </span>
</div>
<div class="link-header">
    <div class="link-title">
        Post Option
        <span class="arrow">
            →
        </span>
    </div>
    <div class="links">
        @can('create')
        <li>
            <a href="{{route('addpost')}}">
                Create Post
            </a>
        </li>
        @endcan
        <li>
            <a href="{{route('home.index')}}">
                view All Posts
            </a>
        </li>
    </div>
</div>
<div class="link-header">
    <div class="link-title">
        All Tags
        <span class="arrow">
            →
        </span>
    </div>
    <div class="links">
        @foreach($tags as $tag)
        <li>
            <a href="/tagposts/{{$tag->id}}">
                {{$tag->name}}
            </a>
        </li>
        @endforeach
    </div>
</div>
<div class="link-header">
    <div class="link-title">
        Activity
        <span class="arrow">
            →
        </span>
    </div>
    <div class="links">
        <li>
        <a href="{{route('your-posts')}}">
            Your Posts
        </a>
        </li>
        <li>
            <a href="#">
                Your Comments
            </a>
        </li>
    </div>
</div>
@endauth
