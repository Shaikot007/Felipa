@extends('front.master')

@section('title')
    Blog
@endsection

@section('body')
    <section class="breadcrumb-bnr">
        <img src="{{asset('/')}}images/bnr-breadcrumb.png" alt=""/>
        <div class="breadcrumb-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog </h1>
                        <div id="crumbs"><a href="{{route('home')}}">Home</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container blog-post-list">
        <div class="row">
            <div class="col-md-8">
                @foreach($blogs as $blog)
                    <div class="excerpt-item">
                        <div class="excerpt-img">
                            <a href="{{route('single.blog')}}">
                                <img src="{{asset($blog->thumbnail)}}" class="img-fluid" alt="images"/>
                            </a>
                        </div>
                        <div class="excerpt-content">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{asset('/')}}images/date.png" alt="icon"/>07
                                </li>
                                <li class="list-inline-item">
                                    <img src="{{asset('/')}}images/Tag-icon.png" alt="icon"/>
                                    <a href="#" rel="category tag">WordPress</a>
                                </li>
                                <li class="list-inline-item">
                                    <img src="{{asset('/')}}images/Admin-icon.png" alt="icon"/>
                                    <a href="#">{{$blog->name}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <img src="{{asset('/')}}images/comment-icon.png" alt="icon"/>4
                                </li>
                            </ul>
                            <a href="{{route('single.blog')}}">
                                <h5>{{$blog->title}}</h5>
                            </a>
                            <p>{{$blog->description}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    <nav class="navigation pagination" role="navigation">
                        <h2 class="screen-reader-text"> </h2>
                        <div class="nav-links"><span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><span>→ <i></i></span></a>
                        </div>
                    </nav>
                </div>
                <div class="space" style="height: 100px"></div>
            </div>
            <div class="col-md-4">
                <aside class="widget-area">
                    <div class="widget widget_felipa_recent_post">
                        <h2 class="widget-title">Recent Posts</h2>
                        <ul class="recent-posts">
                            <li>
                                <a href="#">
                                    <img src="{{asset('/')}}images/r-1.jpeg" class="attachment-felipa-65-70 size-felipa-65-70 wp-post-image" alt=""/> <span>07 Feb 2019</span><br>
                                    <p>Reprehenderit in voluptate velit esse cillum dolore</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/')}}images/r-2.jpeg" class="attachment-felipa-65-70 size-felipa-65-70 wp-post-image" alt=""/> <span>07 Feb 2019</span><br>
                                    <p>Deserunt mollit anim id est laborum</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/')}}images/r-3.jpeg" class="attachment-felipa-65-70 size-felipa-65-70 wp-post-image" alt=""/> <span>07 Feb 2019</span><br>
                                    <p>Cupidatat non proident, sunt in culpa</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('/')}}images/r-4.jpeg" class="attachment-felipa-65-70 size-felipa-65-70 wp-post-image" alt=""/> <span>27 Jan 2019</span><br>
                                    <p>The Shocking Revelation of Portfolio</p>
                                </a>
                            </li>
                        </ul><!-- end latest-tweet -->
                    </div>
                    <div class="widget">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li class="cat-item cat-item-14">
                                <a href="#">Branding</a>
                            </li>
                            <li class="cat-item cat-item-2">
                                <a href="#">ThGncy</a>
                            </li>
                            <li class="cat-item cat-item-15">
                                <a href="#">Web Development</a>
                            </li>
                            <li class="cat-item cat-item-3">
                                <a href="#">WordPress</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h2 class="widget-title">Archives</h2>
                        <ul>
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h2 class="widget-title">Meta</h2>
                        <ul>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries <abbr>RSS</abbr></a></li>
                            <li><a href="#">Comments <abbr>RSS</abbr></a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>
                    </div>
                </aside><!-- #secondary -->
            </div>
        </div>
    </div>
@endsection
