@extends('layouts.master')
@section('title', 'Assyatier Portofolio')

@section('css')
@endsection

@section('content')
    <div class="animated fadeIn row" style="width: 100vw; animationDuration: 1.5s">
        <div class="col-md-6" id="left-hero">
            <h1 class="hero-tag contact-hero animated fadeInLeft text-primary">
                Let's Get In Touch.
            </h1>
            <p class="hero-des contact-des animated fadeIn delay-1s">
                Want to discuss a project, an idea, an opportunity? Just fill up
                this form or write me an email
                <a target="_blank" href="mailto:ishandeveloper@outlook.com" rel="noreferrer">
                    <i class="fas fa-envelope"></i>
                </a>
            </p>
            <form class="input-container" method="POST" action="{{ route('user.mailMe') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea rows="3" id="message" name="message" class="form-control" required=""></textarea>
                </div>
                <button type="submit" class="submit animated bounce delay-4s learn-btn">
                    Send Message
                </button>
            </form>
            <br />
        </div>

        <div class="col-md-6" id="hero-right">
            <img class="animated fadeInRight" id="hero-img" src={{ asset('assets/svg/contact.svg') }} alt="Kontak" />
        </div>
    </div>
@endsection
