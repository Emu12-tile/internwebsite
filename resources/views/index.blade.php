<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v3.9.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        @if ($homes->count())
            <div class="d-flex flex-column">
                @foreach ($homes as $home)
                    <div class="profile ">
                        {{--  --}}





                        <img src="{{ url('uploads/homes/' . $home->logo) }}" alt=""
                            class="img-fluid rounded-circle">
                        <h1 class="text-light"><a href="index.html">{{ $home->home_title }} </a></h1>

                        <div class=" social-links mt-3 text-center">
                            @foreach ($socials as $social)
                                <a href="{{ $social->url }}" class="{{ $social->icon }}"><i
                                        class=" flex bx bxl-{{ $social->icon }}"></i></a>
                            @endforeach


                        </div>
                    </div>

                    <nav id="navbar" class="nav-menu navbar">
                        <ul>
                            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                    <span>Home</span></a></li>
                            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i>
                                    <span>About</span></a>
                            </li>
                            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                                    <span>Resume</span></a></li>
                            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                                    <span>Portfolio</span></a></li>
                            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                                    <span>Services</span></a></li>
                            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                                    <span>Contact</span></a></li>
                        </ul>
                    </nav><!-- .nav-menu -->
                @endforeach
            </div>
        @endif
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
        style=" background: url('uploads/homes/{{ $home->home_image }}') top center; width: 100%;
  height: 100vh;background-size: cover;"
        alt="hero">
        @foreach ($homes as $home)
            <div class="hero-container" data-aos="fade-in">

                <h1> {{ $home->home_title }}</h1>
                <p>I'm <span class="typed" data-typed-items="{{ $home->home_description }}"></span></p>
        @endforeach
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            @if ($abouts->count())
                <div class="container">

                    @foreach ($abouts as $about)
                        <div class="section-title">

                            <h2>{{ $about->about_title }}</h2>
                            <p> {{ $about->description }}</p>
                        </div>

                        <div class="row">
                            @foreach ($profiles as $profile)
                                <div class="col-lg-4" data-aos="fade-right">
                                    <img src="uploads/abouts/{{ $about->image3 }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                                    <span class="font-semibold text-lg text-primary mb-2 block">
                                        <blockquote
                                            class="text-sm text-gray-500 fst-italic py-2 px-3 border-l-4 border-amber-500">
                                            {{-- "Everything is achievable with hard work" --}}
                                            " {{ $about->quote }}"
                                        </blockquote>
                                    </span>

                                    <div class="row">
                                        <div class="col-lg-6 mt-6">
                                            <ul>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong>
                                                    <span>{{ $profile->full_name }}</span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                                    <span>{{ $profile->birthdate }}</span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong>
                                                    <span>{{ $profile->experience }}</span>
                                                </li>





                                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                                    <span>{{ $profile->phone_number }}</span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                                    <span>>{{ $profile->address }}</span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                                    <span>{{ $profile->email }}</span>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            @if ($educations->count())
                <div class="container">

                    <div class="section-title">
                        <h2>Resume</h2>

                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">


                            <h3 class="resume-title"> My Education</h3>
                            @foreach ($educations as $education)
                                <div class="resume-item">
                                    <h4>{{ $education->degree_type }} &amp; {{ $education->department }}</h4>
                                    <h5>{{ $education->start_year }} - {{ $education->passing_year }}</h5>
                                    <p><em>{{ $education->institution_name }}</em></p>
                                    {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit.
                                        Ea vero
                                        voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> --}}
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Professional Experience</h3>
                            @foreach ($experiences as $experience)
                                <div class="resume-item">
                                    <h4>{{ $experience->responsibility }}</h4>
                                    <h5> {{ $experience->duration }}</h5>
                                    <p><em>{{ $experience->companyname }}</em></p>
                                    <ul>
                                        <li>Lead in the design, development, and implementation of the graphic,
                                            layout,
                                            and
                                            production communication materials</li>
                                        <li>Delegate tasks to the 7 members of the design team and provide counsel
                                            on
                                            all
                                            aspects of the project. </li>
                                        <li>Supervise the assessment of all graphic materials in order to ensure
                                            quality
                                            and
                                            accuracy of the design</li>
                                        <li>Oversee the efficient use of production project budgets ranging from
                                            $2,000
                                            -
                                            $25,000</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            @endif
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>



                <div class="testimonials-slider swiper " data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper-wrapper col-lg-4 col-md-6 portfolio-item filter-app">
                        @foreach ($projects as $project)
                            <div class="swiper-slide portfolio-wrap">
                                <img src="uploads/projects/{{ $project->project_images }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="uploads/projects/{{ $project->project_images }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="{{ $project->project_title }}"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio/{{ $project->id }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                @if ($services->count())
                    <div class="row mt-5 mb-5">
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper mb-5">
                                @foreach ($services as $service)
                                    <div class="swiper-slide icon-box col-lg-4 col-md-6 " data-aos="fade-up">
                                        {{-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up"> --}}
                                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                                        <h4 class="title"><a href=""> {{ $service->service_name }}</a>
                                        </h4>
                                        <p class="description ">
                                            {{ Illuminate\Support\Str::of($service->description)->words(30) }}</p>
                                        {{-- </div> --}}
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination">

                            </div>

                        </div>

                    </div>
                @endif

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">

            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>


                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

                    @if ($testimonies->count())
                        <div class="swiper-wrapper">
                            @foreach ($testimonies as $testimony)
                                <div class="swiper-slide">

                                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">

                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ $testimony->comment }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="uploads/testimonies/{{ $testimony->photo }}"
                                            class="testimonial-img" alt="">
                                        <h3> {{ $testimony->name }}</h3>
                                        <h4>{{ $testimony->role }}</h4>

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    @endif
                </div>

                <div class="swiper-pagination">

                </div>


            </div>

        </section><!-- End Testimonials Section -->
        <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title">teammates</h2>
                <div class="testimonials-slider swiper">
                    @if ($teams->count())
                        <div class="  swiper-wrapper col-lg-4 col-md-6">
                            @foreach ($teams as $team)
                                <div class="swiper-slide">
                                    <img class="img-fluid rounded w-100" src="uploads/teams/{{ $team->photo }}"
                                        style="height:300px;"alt="">
                                    <div class="text"> {{ $team->name }}</div>
                                    <p> {{ $team->responsiblity }}</p>
                                </div>
                            @endforeach
                        </div>

                </div>
            @else
                @endif

            </div>
            {{-- </div> --}}
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('send.email') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            {{-- <div class="row"> --}}
                            <div class="form-group ">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group ">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            {{-- </div> --}}
                            {{-- <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="message" id="subject" required>
                            </div> --}}
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
