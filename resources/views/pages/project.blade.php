@extends('layouts.master')
@section('title', 'Assyatier Portofolio')

@section('css')
@endsection

@section('content')
    <div class="col-md-12 pad-0-5-rem" id="left-hero">
        <h1 class="hero-tag contact-hero fadeInLeft blue">My Work.</h1>
        <p class="hero-des contact-des fadeIn delay-1s">
            Take a look at some of my projects I've done, apps or websites that
            I've made and my designs.
        </p>
    </div>
    <div class="animated bounceInUp delay-1s">
        <div class="row pad-0-5-rem" id="work-row">
            <div class="col-md-6 col-sm-12 bounceInLeft delay-2s">
                <div class="work-hero">
                    <img class="work-hero-img" src={{ asset('assets/img/work/alea/hero-alea.png') }} alt="hero" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="work-des">
                    <h1 style="font-weight: 600">ALEA</h1>
                    <p>
                        ALEA is an asset auction application that performs its function
                        as a forum for online-based auction activities belonging to
                        Kisel Indonesia. This application is an innovation in the
                        implementation of auctions which were previously still manual.
                    </p>
                    <div class="technologies">
                        <h2>Technologies Used</h2>
                        <span class="tech-stack"> NextJS </span>
                        <span class="tech-stack"> React-Bootstrap </span>
                    </div>
                    <div class="technologies featured">
                        <h2>Featured On</h2>
                        <span class="partners">
                            <a href="http://alea.kiselindonesia.com:8083/" target="_blank" rel="noreferrer">
                                <img id="partner-logo" src={{ asset('assets/img/work/alea/logo-kisel-tp.png') }}
                                    alt="hero" />
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.other-work')
    @include('layouts.footer')
@endsection
