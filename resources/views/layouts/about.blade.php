@extends('layouts.app')
@section('content')
 <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>About</h2>
      <p>I am a passionate Web Developer with a focus on creating dynamic, user-friendly, and efficient web applications. My aim is to deliver solutions that meet both user and business needs.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="assets/img/hira.jpeg" class="img-fluid" alt="Hira Khizar">
        </div>
        <div class="col-lg-8 content">
          <h2>Web Developer &amp; Backend Developer.</h2>
          <p class="fst-italic py-3">
            I specialize in backend development using Laravel and creating seamless web experiences that prioritize performance and scalability.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled">
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>9 Aug 2002</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+92 3066725440</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Sargodha, Pakistan</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled">
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor in Information Technology</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>hirakhizarkhizarhayat@gmail.com</span></li>
               
              </ul>
            </div>
          </div>
          <p class="py-3">
            With a keen interest in problem-solving and innovation, I continuously strive to enhance my skills and contribute to impactful projects. I enjoy exploring new technologies, optimizing database solutions, and staying updated with the latest trends in web development.
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->
  @endsection
