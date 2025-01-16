@extends('layouts.app')
@section('content')
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Showcasing some of my significant contributions and projects in Laravel development.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-collaborations">Collaborations</li>
                <li data-filter=".filter-api">API Development</li>
                <li data-filter=".filter-projects">Own Projects</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <!-- NeonGym -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item  filter-projects">
                    <img src="{{ asset('assets/img/neogym.png') }}" class="img-fluid" alt="Pharmacy Management System">
                    <div class="portfolio-info">
                        <h4>Pharmacy Management System</h4>
                        <p>Integrated the template into Laravel, developed its backend, and made it available on GitHub for public use.</p>
                        <a href="assets/img/portfolio/pharmacy-management.jpg" title="Pharmacy Management System" data-gallery="portfolio-gallery-laravel" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="https://github.com/YourGitHubUsername/pharmacy-management" title="View on GitHub" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Aluminium Prime API -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-api filter-collaborations">
                    <img src="{{ asset('assets/img/aluminiumPrime.png') }}" class="img-fluid" alt="Aluminium Prime API">
                    <div class="portfolio-info">
                        <h4>Aluminium Prime API</h4>
                        <p>Streamlined inventory and sales data integration, reducing processing time by 30%.</p>
                        <a href="assets/img/portfolio/aluminium-prime.jpg" title="Aluminium Prime API" data-gallery="portfolio-gallery-api" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Car Booking System -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-api filter-collaborations">
                    <img src="{{ asset('assets/img/blackluxura.png') }}" class="img-fluid" alt="Car Booking System">
                    <div class="portfolio-info">
                        <h4>Black Luxora</h4>
                        <p>Implemented features like dynamic pricing and real-time booking updates.</p>
                        <a href="assets/img/portfolio/car-booking.jpg" title="Car Booking System" data-gallery="portfolio-gallery-projects" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- School Management System -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-collaborations">
                    <img src="{{ asset('assets/img/schoolSystem.png') }}" class="img-fluid" alt="School Management System">
                    <div class="portfolio-info">
                        <h4>School Management System</h4>
                        <p>Enhanced performance and scalability to handle 50+ daily users.</p>
                        <a href="assets/img/portfolio/school-management.jpg" title="School Management System" data-gallery="portfolio-gallery-laravel" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Permission Management System -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-projects">
                    <img src="{{ asset('assets/img/rolePermmions.png') }}" class="img-fluid" alt="Permission Management System">
                    <div class="portfolio-info">
                        <h4>Permission Management System</h4>
                        <p>Implemented RBAC with dynamic permissions for secure and efficient user authorization.</p>
                        <a href="assets/img/portfolio/permission-management.jpg" title="Permission Management System" data-gallery="portfolio-gallery-api" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-collaborations">
                  <img src="{{ asset('assets/img/porlarSystem.png') }}" class="img-fluid" alt="Salon System">
                  <div class="portfolio-info">
                      <h4>Salon System</h4>
                      <p>Developed a comprehensive salon management system featuring appointment scheduling, inventory tracking, and dynamic role-based access control.</p>
                      <a href="assets/img/portfolio/permission-management.jpg" title="Salon System" data-gallery="portfolio-gallery-api" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              
            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->
@endsection
