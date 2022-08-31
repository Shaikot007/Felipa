@extends('front.master')

@section('title')
    Contact
@endsection

@section('body')
    <section class="breadcrumb-bnr">
        <img src="{{asset('/')}}images/bnr-breadcrumb.png" alt=""/>
        <div class="breadcrumb-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact </h1>
                        <div id="crumbs">
                            <a href="{{route('home')}}">home</a>
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
            <div class="col-sm-5 contact-info">
                <div class="section-title color" style="text-align: left">
                    <h1>Contact Info</h1>
                </div>
                <div class="space" style="height: 40px"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <p><i class="fa fa-phone"></i> Phone Number</p>
                    </div>
                    <div class="col-sm-6">
                        <p>456-2547-645</p>
                        <p>3658-789-419</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p><i class="fa fa-envelope"></i> Email</p>
                    </div>
                    <div class="col-sm-6">
                        <p>bongobayond@example.com</p>
                        <p>theme@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p><i class="fa fa-map"></i> Location</p>
                    </div>
                    <div class="col-sm-6">
                        <p>245 k, Shikh mujib road,</p>
                        <p>agrabad Boropul road, Ny</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-1">
                <div class="section-title color" style="text-align: left">
                    <h1>Get in Touch</h1>
                </div>
                <div class="space" style="height: 40px"></div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{ route('mail.contact') }}" id="contactUSForm">
                    {{ csrf_field() }}
                    <div class="row contact-form">
                        <div class="col-md-6">
                            <input type="text" name="name" value="{{ old('name') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Name"/>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" value="{{ old('email') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email"/>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" value="{{ old('subject') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Subject"/>
                            @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" value="{{ old('phone') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Phone"/>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                            <div class="felipa-btn">
                                <input type="submit" value="Send Now" class="wpcf7-form-control wpcf7-submit contact-btn"/><span class="ajax-loader"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="space" style="height: 130px"></div>
    <div class="container-fluid">
        <div class="row">
            <iframe frameborder="0" scrolling="no"  height="480" width="100%" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe>
        </div>
    </div>
@endsection
