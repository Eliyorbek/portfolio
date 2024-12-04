@extends('front.inc.app')
@section('content')

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="/img1.jpg" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Eliyorbek Tojimatov</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://www.linkedin.com/in/eliyorbek-tojimatov-02162b2a5/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/eliyorbek_tojimatov/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://t.me/eliyorbek_tojimatov" class="google-plus"><i class="bi bi-telegram"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>{{ __('words.home') }}
                    </a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> {{ __('words.about') }}</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> {{ __('words.resume') }}</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> {{ __('words.portfolio') }}</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> {{ __('words.services') }}</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> {{ __('words.contact') }}</a></li>
            </ul>
        </nav>
        <div class="language mt-5">
            <div class="row d-flex">
                <div class="col-md-6"><a style="cursor: pointer;" href="/language/uz"><img src="/uzb.png" style="width: 100px;" alt=""></a></div>
                <div class="col-md-6"><a style="cursor: pointer;" href="/language/en"><img src="/usa.png" style="width: 100px;" alt=""></a></div>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="/img3.jpg" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2 style="font-size: 30px;">Tojimatov Eliyorbek Mirabdulla o'g'li</h2>
                <p>{{__('words.im')}} <span class="typed"
                             data-typed-items="{{__('words.freelancer')}},{{__('words.backend')}},{{__('words.php')}}">{{__('words.backend')}} </span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        @include('front.about')
        <!-- /About Section -->

        <!-- Stats Section -->
        @include('front.happy_client')
        <!-- /Stats Section -->

        <!-- Skills Section -->
        @include('front.skills')
        <!-- /Skills Section -->

        <!-- Resume Section -->
        @include('front.resume')
        <!-- /Resume Section -->

        <!-- Portfolio Section -->
        @include('front.portfolio')
        <!-- /Portfolio Section -->

        <!-- Services Section -->
       @include('front.service')
        <!-- /Services Section -->

        <!-- Testimonials Section -->
        @include('front.testimonial')
        <!-- /Testimonials Section -->

        <!-- Contact Section -->
        @include('front.contact')
        <!-- /Contact Section -->

    </main>
@endsection
