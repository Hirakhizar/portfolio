@extends('layouts.app')
@section('content')
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>My Services</h2>
            <p>I bring your ideas to life with clean code and robust solutions.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <!-- Service Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Web Development</h3>
                        </a>
                        <p>Crafting responsive, fast, and user-friendly websites using modern framework Laravel.</p>
                    </div>
                </div><!-- End Service Item -->

                <!-- Service Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <i class="bi bi-server"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Backend Development</h3>
                        </a>
                        <p>Building secure and scalable server-side applications with APIs, database design, and business logic integration.</p>
                    </div>
                </div><!-- End Service Item -->

                <!-- Service Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <i class="bi bi-puzzle"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Custom Solutions</h3>
                        </a>
                        <p>Developing tailored software solutions to meet unique business requirements, from CRMs to POS systems.</p>
                    </div>
                </div><!-- End Service Item -->

                <!-- Service Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <div class="icon">
                            <i class="bi bi-database"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Database Design</h3>
                        </a>
                        <p>Designing optimized, normalized, and scalable database architectures for efficient data management.</p>
                    </div>
                </div><!-- End Service Item -->

                <!-- Service Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <div class="icon">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Project Deployment</h3>
                        </a>
                        <p>Proficient in deploying and managing web projects on platforms like Hostinger, with hands-on experience using FileZilla and GitHub for streamlined project handling and updates.</p>
                    </div>
                </div><!-- End Service Item -->
                

                <!-- Service Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <div class="icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>System Integration</h3>
                        </a>
                        <p>Integrating third-party APIs and services like payment gateways, SMS notifications, and social logins.</p>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
