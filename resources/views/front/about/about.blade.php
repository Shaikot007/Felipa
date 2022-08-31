@extends('front.master')

@section('title')
    About
@endsection

@section('body')
    <section class="breadcrumb-bnr">
        <img src="{{asset('/')}}images/bnr-breadcrumb.png" alt=""/>
        <div class="breadcrumb-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About </h1>
                        <div id="crumbs"><a href="{{route('home')}}">home</a>
                            <i>/</i>
                            <a href="{{route('about')}}">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <div class="space" style="height: 130px"></div>
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
    <div class="space" style="height: 100px"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <img class="img-fluid" src="{{asset('/')}}images/img-2.png" alt=""/>
            </div>
            <div class="col-sm-12 col-lg-5 offset-lg-1">
                <div class="section-title color" style="text-align: left">
                    <span>About felipa</span>
                    <h1>We’re motivated by the desire to achieve.</h1>
                </div>
                <div class="space" style="height: 20px"></div>
                <div class="elementor-text-editor">
                    <p>Monsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaexercitation.Lorem ipsum dolor sit amet consectetur.</p>
                    <p>adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
                <div class="space" style="height: 30px"></div>
                <div class="felipa-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="space" style="height: 130px"></div>
@endsection
