@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-none d-xl-block">
                    <div class="banner-3-content">
                        <h1>Best creative template for agencies</h1>
                        <p>Lorem ipsum dummy text are usually use. Replace your text bare usuallly use in these section. So i used here. replace your text</p>
                        <div class="bnr-btn">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{route('home')}}">Contact Us</a></li>
                                <li class="list-inline-item"><a href="{{route('about')}}">Learn more </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-block d-lg-block d-sm-block d-xl-none">
                    <div class="banner-3-content">
                        <h1>Best creative theme for agencies</h1>
                        <p>Lorem ipsum dummy text are usually use. Replace your text bare usuallly use in these section. So i used here. replace your text</p>
                        <div class="bnr-btn">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#">Contact Us</a></li>
                                <li class="list-inline-item"><a href="#">Learn more </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space" style="height: 115px"></div>
    <section id="about_me">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-block d-lg-none text-center">
                    <img class="img-fluid" src="{{asset('/')}}images/img-1.png" alt=""/>
                    <div class="space" style="height: 50px"></div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="space d-none d-md-none d-xl-block d-sm-block" style="height: 50px"></div>
                    <div class="section-title color" style="text-align: left">
                        <span>About felipa</span>
                        <h1>We’re motivated by the desire to achieve.</h1>
                    </div>
                    <div class="space" style="height: 20px"></div>
                    <div class="elementor-text-editor">
                        <p>Ponsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis exercitation.</p>
                        <ul>
                            <li>Best digital service provider site lorem dum adipisici</li>
                            <li>Bonsectetur adipisicing elit, sed do eiusmod tempor</li>
                            <li>Mempor incididunt ut labore et dolore magna aliqua.</li>
                        </ul>
                    </div>
                    <div class="space" style="height: 30px"></div>
                    <div class="felipa-btn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 d-none d-xl-block d-lg-block">
                    <img class="img-fluid" src="{{asset('/')}}images/img-1.png" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <div class="space" style="height: 130px"></div>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title color" style="text-align: center">
                        <span>services</span>
                        <h1>Our affordable services</h1>
                    </div>
                </div>
                <div class="space" style="height: 130px"></div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-vector"></i>
                        <h5>Graphic Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-web-programming"></i>
                        <h5>Development</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-digital-marketing"></i>
                        <h5>Digital Marketing</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-research"></i>
                        <h5>Marketing Resarch</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-3d"></i>
                        <h5>3D Animation</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-brainstorming"></i>
                        <h5>Digital Product</h5>
                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt labore et dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-4" >
                    <h1><span class="counter">2,523</span></h1>
                    <h3>Customers</h3>
                    <i class="fa fa-users"></i>
                </div>
                <div class="col-md-4">
                    <h1><span class="counter">63,075</span></h1>
                    <h3>Total Web Pages</h3>
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="col-md-4">
                    <h1><span class="counter">12,218</span></h1>
                    <h3>Cups Of Coffee</h3>
                    <i class="fa fa-coffee"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="space" style="height: 140px"></div>
    <section class="portfolio-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title color" style="text-align: center">
                        <span>portfolio</span>
                        <h1>Latest portfolio</h1>
                    </div>
                </div>
                <div class="space" style="height: 130px"></div>
                <div class="container-fluid" style="padding: 0; overflow: hidden;">
                    <div class="portfolio">
                        <div class="portfolio-item">
                            <img src="{{asset('/')}}images/p-1.jpeg" alt="images"/> <span>Digital Marketing</span>
                            <a href="#">
                                <h5>Digital Marketing</h5>
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{asset('/')}}images/p-2.jpg" alt="images"/> <span>Design</span>
                            <a href="#">
                                <h5>Landing Page</h5>
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{asset('/')}}images/p-3.jpeg" alt="images"/> <span>Web Development</span>
                            <a href="#">
                                <h5>Web Development</h5>
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{asset('/')}}images/p-4.jpeg" alt="image"/> <span>Digital Marketing</span>
                            <a href="#">
                                <h5>Graphic Design</h5>
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{asset('/')}}images/p-3.jpeg" alt="image"/> <span>Design</span>
                            <a href="#">
                                <h5>SEO Marketing</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title color" style="text-align: center">
                        <span>feedback</span>
                        <h1>What client says</h1>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial-item">
                        <img class="testi-quote" src="{{asset('/')}}images/quote.png" alt="img"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('/')}}images/b.jpg" alt="Logo"/>
                            </div>
                            <div class="col-sm-5">
                                <h5>Ibrahim emran</h5>
                                <span>CEO of Felipa</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img class="testi-quote" src="{{asset('/')}}images/quote.png" alt="img"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('/')}}images/c.png" alt="Logo"/>
                            </div>
                            <div class="col-sm-5">
                                <h5>Ibrahim emran</h5>
                                <span>CEO of BongoBeyond</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img class="testi-quote" src="{{asset('/')}}images/quote.png" alt="img"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('/')}}images/a.jpg" alt="Logo"/>
                            </div>
                            <div class="col-sm-5">
                                <h5>Ibrahim emran</h5>
                                <span>CEO of Felipa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title color" style="text-align: center">
                        <span>Team</span>
                        <h1>Our dedicated member</h1>
                    </div>
                </div>
                <div class="space" style="height: 130px"></div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team animate-bottom">
                        <img src="{{asset('/')}}images/3.jpg" alt="img"/>
                        <div class="team-content">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <h5>Ibrahim imran</h5>
                        <span>Company Director</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="space" style="height: 40px"></div>
                    <div class="team animate-top">
                        <img src="{{asset('/')}}images/team1.png" alt="img">
                        <div class="team-content">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <h5>Pabby mojumdar</h5>
                        <span>CEO of BB</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team animate-bottom">
                        <img src="{{asset('/')}}images/team2.png" alt="img"/>
                        <div class="team-content">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <h5>Halarpo mamun</h5>
                        <span>UI/UX designer</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="space" style="height: 40px"></div>
                    <div class="team animate-top">
                        <img src="{{asset('/')}}images/team3.png" alt="img"/>
                        <div class="team-content">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <h5>Moynar maa</h5>
                        <span>Mananger</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="section-title color" style="text-align: center">
                        <span>Blog</span>
                        <h1>Latest News</h1>
                    </div>
                </div>
                <div class="space" style="height: 130px"></div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid" src="{{asset('/')}}images/h-n-1.jpeg" alt="A friend is someone who knows all about you and still loves you."/>
                        </div>
                        <div class="blog-item-content">
                            <p class="front-date">27 Jan 2019</p>
                            <a href="{{route('single.blog')}}">
                                <h5>A friend is someone who knows all about...</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                            <a class="blog-btn" href="{{route('single.blog')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid" src="{{asset('/')}}images/h-n-2.jpeg" alt="A friend is someone who knows all about you and still loves you."/>
                        </div>
                        <div class="blog-item-content">
                            <p class="front-date">27 Jan 2019</p>
                            <a href="{{route('single.blog')}}">
                                <h5>Ten Secrets You Will Not Want To Know</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                            <a class="blog-btn" href="{{route('single.blog')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img class="img-fluid" src="{{asset('/')}}images/h-n-3.jpeg" alt="A friend is someone who knows all about you and still loves you."/>
                        </div>
                        <div class="blog-item-content">
                            <p class="front-date">27 Jan 2019</p>
                            <a href="{{route('single.blog')}}">
                                <h5>The Shocking Revelation of Portfolio</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                            <a class="blog-btn" href="{{route('single.blog')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img class="client" src="{{asset('/')}}images/client-1.png" alt="img"/>
            </div>
            <div class="col">
                <img class="client" src="{{asset('/')}}images/client-2.png" alt="img"/>
            </div>
            <div class="col">
                <img class="client" src="{{asset('/')}}images/client-3.png" alt="img"/>
            </div>
            <div class="col">
                <img class="client" src="{{asset('/')}}images/client-4.png" alt="img"/>
            </div>
            <div class="col">
                <img class="client" src="{{asset('/')}}images/client-5.png" alt="img"/>
            </div>
        </div>
    </div>

    <div class="space" style="height: 100px"></div>

    <section class="gradient-bg">
        <div class="space" style="height: 53px"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" >
                    <h2>Do You Love What You See?</h2>
                </div>
                <div class="col-md-6 cta-btn">
                    <div class="bnr-btn">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Buy It Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="space" style="height: 40px"></div>
    </section>
@endsection
