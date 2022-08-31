@extends('front.master')

@section('title')
    Portfolio
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
@endsection
