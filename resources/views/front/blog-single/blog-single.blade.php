@extends('front.master')

@section('title')
    Single Blog
@endsection

@section('body')
    <section class="breadcrumb-bnr">
        <img src="{{asset('/')}}http://www.bongobeyond.net/wp/felipa/wp-content/uploads/2019/02/Inner-banner.png" alt=""/>
        <div class="breadcrumb-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Cupidatat non proident, sunt in culpa </h1>
                        <div id="crumbs">
                            <a href="{{route('home')}}">Home</a> <i>/</i> <a href="{{route('home')}}">Branding</a> <i>/</i>
                            <span class="current">Cupidatat non proident, sunt in culpa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-center mar-bottom">
            <div class="space-bottom col-md-8">
                <article class="content-item">
                    <div class="content-img">
                        <img src="{{asset('/')}}images/b-1.jpeg" class="img-fluid" alt="img"/>
                    </div>
                    <div class="content-content entry-content">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="{{asset('/')}}images/date.png" alt="icon"/>07
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('/')}}images/Tag-icon.png" alt="icon"/>
                                <a href="#" rel="category tag">Branding</a>
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('/')}}images/Admin-icon.png" alt="icon"/>
                                <a href="#">admin</a>
                            </li>
                            <li class="list-inline-item">
                                <img src="{{asset('/')}}images/comment-icon.png" alt="icon"/>3
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <blockquote class="wp-block-quote">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                        </blockquote>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h5>So where to from here then?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="social-share">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i>Facebook</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-google-plus"> Google</i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i>LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="post-navigation">
                            <div class="row text-left">
                                <div class="col-sm-2 align-self-center">
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <div class="col-sm-10">
                                    <span>Previous post</span>
                                    <a href="#" rel="prev">The Shocking Revelation of Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post-navigation">
                            <div class="row text-right">
                                <div class="col-sm-10">
                                    <span>Next post</span>
                                    <a href="#" rel="next">Deserunt mollit anim id est laborum</a>
                                </div>
                                <div class="col-sm-2 align-self-center">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments-area">
                    <h4 class="comments-title">
                        3 comments </h4><!-- .comments-title -->
                    <ol class="comment-list">
                        <li class="comment">
                            <article id="div-comment-11" class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="http://1.gravatar.com/avatar/d679f2768408f0a0bb147546422e65c2?s=80&amp;d=mm&amp;r=g"/>
                                        Yeadh</b> <span class="says">says:</span>
                                    </div><!-- .comment-author -->
                                    <div class="comment-metadata">
                                        <a href="#">
                                            <time>February 10, 2019 at 5:54 am </time>
                                        </a>
                                    </div><!-- .comment-metadata -->
                                </footer><!-- .comment-meta -->
                                <div class="comment-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div><!-- .comment-content -->
                                <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                            </article><!-- .comment-body -->
                            <ol class="children">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="http://0.gravatar.com/avatar/c300c89dd550f472f3d17386d30e3219?s=80&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/c300c89dd550f472f3d17386d30e3219?s=160&amp;d=mm&amp;r=g 2x" class="avatar"/>
                                                <b class="fn">Lora Jenifar</b> <span class="says">says:</span>
                                            </div><!-- .comment-author -->
                                            <div class="comment-metadata">
                                                <a href="http://www.bongobeyond.net/wp/felipa/2019/02/07/cupidatat-non-proident-sunt-in-culpa/#comment-12">
                                                    <time>February 10, 2019 at 6:06 am </time>
                                                </a>
                                            </div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                            </ol><!-- .children -->
                        </li><!-- #comment-## -->
                        <li class="comment">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img alt="" src="http://0.gravatar.com/avatar/64aca6611dc529f918de0a2296447edc?s=80&amp;d=mm&amp;r=g"/>
                                        <b class="fn">Ibrahim Emran</b> <span class="says">says:</span>
                                    </div><!-- .comment-author -->
                                    <div class="comment-metadata">
                                        <a href="#">
                                            <time>February 10, 2019 at 6:07 am </time>
                                        </a>
                                    </div><!-- .comment-metadata -->
                                </footer><!-- .comment-meta -->
                                <div class="comment-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div><!-- .comment-content -->
                                <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                            </article><!-- .comment-body -->
                        </li><!-- #comment-## -->
                    </ol><!-- .comment-list -->
                    <div class="comment-respond">
                        <h4>Leave a Reply</h4>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input id="author" name="author" type="text" placeholder="Name" value="" aria-required="true"/>
                                </div>
                                <div class="col-sm-6">
                                    <input id="email" name="email" type="text" placeholder="Email" value="" aria-required="true"/>
                                </div>
                            </div>
                            <textarea name="comment" placeholder="Your Comment" aria-required="true"></textarea>
                            <p class="form-submit">
                                <button class="submit" type="submit">Submit</button>
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div><!-- #comments -->
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
