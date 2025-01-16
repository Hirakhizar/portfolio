@extends('layouts.app')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Hira Khizar</h2>
            <p>I'm a Laravel Developer  from Sargodha</p>
            <a href="{{ route('about') }}" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section>
  </main> 
@endsection