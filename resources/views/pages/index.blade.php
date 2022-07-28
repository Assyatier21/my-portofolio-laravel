@extends('layouts.master')
@section('title', 'Assyatier Portofolio')

@section('css')
@endsection

@section('content')
    <div class="d-flex flex-row content pad-0-5-rem">
        <div class="col-lg-6 p-2 left">
            <h1 class="hero-tag">
                <span class="typer text-primary" id="typer"></span>
            </h1>
            <p class="hero-des">
                I'm a Software Engineer with experience in
                <b class="blue">Website Development</b>, specializing in
                <b class="blue">Backend Development</b>. I use my skill in
                website development to solve technological problem in businesses.
            </p>

            <button class="animated bounce delay-4s learn-btn">
                Learn More
            </button>
            <a href="#">
                <button class="contact-btn">Contact Me</button>
            </a>

            <div class="social-icons">
                @include('components.social-media')
            </div>
        </div>
        <div class="col-lg-6 p-2 right d-flex justify-content-center">
            <img src="{{ asset('assets/svg/undraw_developer_activity.svg') }}" id="hero-img" alt="">
        </div>
    </div>
@endsection
