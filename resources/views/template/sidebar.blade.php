    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">
                    Dashboard
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-speedometer menu-icon">
                        </i>
                        <span class="nav-text">
                                    Dashboard
                                </span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{route('home.index')}}">
                                Home
                            </a>
                        </li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                </li>
                <li class="mega-menu mega-menu-sm">
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-globe-alt menu-icon">
                        </i>
                        <span class="nav-text">
                                    Post option
                                </span>
                    </a>
                    <ul aria-expanded="false">
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
                    </ul>
                </li>
                <li class="mega-menu mega-menu-sm">
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-globe-alt menu-icon">
                        </i>
                        <span class="nav-text">
                                    All  Tags
                                </span>
                    </a>
                    <ul aria-expanded="false">
                        @foreach($tags as $tag)
                            <li>
                                <a href="/tagposts/{{$tag->id}}">
                                    {{$tag->name}}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-label">
                    Activities
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-envelope menu-icon">
                        </i>
                        <span class="nav-text">
                                     Activity
                                </span>
                    </a>
                    <ul aria-expanded="false">
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
                    </ul>
                </li>
            </ul>
        </div>
    </div>