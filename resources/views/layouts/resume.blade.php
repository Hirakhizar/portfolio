@extends('layouts.app')
@section('content')
  <!-- Resume Section -->
  <section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Resume</h2>
      <p>As a Software Engineer with expertise in Laravel for backend development, I craft dynamic, efficient, and secure web applications. Leveraging a solid foundation in software engineering, I specialize in transforming complex business needs into scalable, maintainable solutions. Passionate about adopting cutting-edge technologies, I thrive in collaborative team settings, delivering impactful results that align with organizational goals and drive success.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Summary</h3>

          <div class="resume-item pb-0">
            <h4>Hira Khizar</h4>
            <p><em>Web Developer</em></p>
            <ul class="list-unstyled">
              <li>Sargodha, Pakistan</li>
              <li>+92 3066725440</li>
              <li>hirakhizarkhizarhayat@gmail.com</li>
            </ul>
          </div><!-- End Resume Item -->

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Bachelor of Information Technology</h4>
            <h5>10/2020 - Present</h5>
            <p><em>University of Sargodha, Sargodha, Pakistan</em></p>
          </div><!-- End Resume Item -->

          <div class="resume-item">
            <h4>Intermediate in Computer Science</h4>
            <h5>07/2018 - 07/2020</h5>
            <p><em>Reader Group of Colleges, Sargodha, Pakistan</em></p>
          </div><!-- End Resume Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>PHP Laravel Intern</h4>
            <h5>02/2024 - Present</h5>
            <p><em>Spark Solutionz, Sargodha, Pakistan</em></p>
            <ul>
              <li>Developed and deployed 5+ e-commerce and school management systems using Laravel, improving efficiency by 30%.</li>
              <li>Designed and developed an API for Aluminium Prime POS, streamlining inventory and sales data integration, reducing data processing time by 30%.</li>
              <li>Implemented RESTful APIs for tech service platforms, improving system performance by 30%.</li>
              <li>Developed a car booking system with advanced features like dynamic pricing and real-time booking updates, boosting user engagement by 40%.</li>
              <li>Engineered a job appointment system, optimizing scheduling and improving efficiency for end users by 25%.</li>
              <li>Delivered responsive Laravel Blade interfaces, boosting user satisfaction by 25%.</li>
            </ul>
          </div><!-- End Resume Item -->
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <h3 class="resume-title">Skills</h3>
          <ul class="list-unstyled">
            <li  class="resume-item list">PHP Laravel</li>
            <li  class="resume-item list">HTML, CSS, JavaScript</li>
            <li  class="resume-item list">MySQL</li>
            <li  class="resume-item list">Git Version Control</li>
            <li  class="resume-item list">RESTful APIs</li>
            <li  class="resume-item list">Bootstrap</li>
          </ul>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <h3 class="resume-title">Personal Projects</h3>
          <div class="resume-item">
            <h4>Ilm-Ul Hadi (MERN Stack)</h4>
            <p>Engineered a Hadith Authentication System with a team of two, enhancing accuracy and reliability in authenticating Hadith sources.</p>
          </div>
          <div class="resume-item">
            <h4>School Management System (Laravel, MySQL)</h4>
            <p>Enhanced and maintained school management systems, improving performance and scalability to handle 50+ daily users.</p>
          </div>
          <div class="resume-item">
            <h4>Pharmacy Management (Laravel, MySQL)</h4>
            <p>Built a system with authentication and inventory tracking features, handling prescriptions for over 100 users daily.</p>
          </div>
          <div class="resume-item">
            <h4>Permission Management System (Laravel, MySQL)</h4>
            <p>Developed a robust permission management system to control user access levels across various modules, ensuring secure and efficient user authorization.</p>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Resume Section -->

@endsection
