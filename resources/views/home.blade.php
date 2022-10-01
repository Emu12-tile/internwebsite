<x-app-layout>

    <section id="home" class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
        <div class="container">
            <div class="flex flex-wrap -mx-6">
                <div class="w-full lg:w-5/12 px-4">
                    @if ($homes->count())
                        <div class="hero-content">
                            <h3
                                class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6">
                                @foreach ($homes as $home)
                                    <div class="text-1"> My Name is {{ $home->home_title }} </div>
                                    <div class="text-2">
                                        I am <span class="rounded-md text-amber-600">{{ $home->home_description }}</span>
                                    </div>
                            </h3>
                            <p class="text-base mb-8 max-w-[520px]">
                                I am a developer with 10+ years of experience. <br />
                                I love sharing my knowledge to others, that's why I created a
                                <a class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
                                    href="https://youtube.com/TheCodeholic" target="_blank">YouTube Channel</a>.
                                <br>
                            </p>
                            <ul class="flex flex-wrap items-center">
                                <li>
                                    <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                        My Projects
                                    </x-button-link>
                                </li>
                            </ul>
                            <div class="clients pt-16">
                                <h6
                                    class="font-normal text-xs flex items-center text-body-color dark:text-primary mb-4">
                                    Follow me on social media
                                    <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
                                </h6>
                                {{-- <x-social-icons></x-social-icons> --}}

                                <div class="flex items-center">
                                    @foreach ($socials as $social)
                                        <a href="{{ $social->url }}" target="_blank"
                                            class="
                            w-10
                            h-10
                            flex
                            items-center
                            justify-center
                            rounded-full
                            border
                            border-primary
                            border-2
                            dark:border-white
                            text-dark
                            dark:text-white
                            hover:text-white
                            hover:bg-primary
                            hover:border-primary
                            hover:dark:border-primary
                            mr-3
                            sm:mr-4
                            lg:mr-3
                            xl:mr-4
                       ">
                                            <span class="fa fa-{{ $social->icon }}"></span>
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                </div>

                <div class="hidden lg:block lg:w-1/12 px-4"></div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="lg:text-right lg:ml-auto">
                        <div class="relative inline-block z-10 pt-11 lg:pt-0">
                            <img src="uploads/homes/{{ $home->home_image }}" alt="hero"
                                class="max-w-full lg:ml-auto" />
                            <span class="absolute -left-8 -bottom-8 z-[-1]">
                                <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            @endif
        </div>
        </div>
    </section>
    {{-- navbar section start --}}
    <header x-data="{ navbarOpen: false }"
        class="fixed left-0 top-0 z-50  w-full flex items-center shadow-md dark:bg-slate-900 h-24 text-white"
        {{-- class="fixed right-0 top-full  py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none" --}}>
        <div class="container">
            <div class="flex -mx-4 items-center justify-between relative">
                <div class="pr-4 w-60 max-w-full">

                    <a href="/" class="w-full flex items-center py-2">
                        <img src="uploads/homes/{{ $home->logo }}" alt="logo"
                            class="w-[48px] lg:w-[64px] inline-block dark:hidden" />
                        <img src="uploads/homes/{{ $home->logo }}" alt="logo"
                            class="w-[48px] lg:w-[64px] hidden dark:inline-block" />
                        <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">EMU.T</span>
                    </a>
                </div>
                <div class="flex px-4 justify-end items-center w-full">
                    <div>
                        <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                            x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>

                        <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-0 top-full  py-2 px-2 z-20 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                            <ul class="block lg:flex lg:items-center">
                                {{-- <li> --}}
                                {{-- class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"> --}}
                                {{-- {{ $slot }} --}}


                                <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#home">Home</a></li>
                                <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#about">About</a></li>
                                <li><a
                                        class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="#services">Services</a>
                                </li>
                                <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#portfolio" class="menu-btn">Portfolio</a></li>
                                <li><a
                                        class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="#blog">Blog</a>
                                </li>
                                <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#experience" class="menu-btn">Experience</a></li>
                                <li><a
                                        class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="#teams">Teams</a>
                                </li>
                                <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#gallery" class="menu-btn">Gallery</a></li>
                                <li><a class="text-xs font-large text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                        href="#contact" class="menu-btn">Contact</a></li>
                                <li><a href="#subscribe" class="btn btn-outline-danger lg:ml-6 xl:ml-12 "
                                        href="#subscribe">subscribe</a></li>

                            </ul>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- <x-home.learn-php></x-home.learn-php> --}}
    <!-- ====== About Section Start -->
    <section id="about" class="dark:bg-slate-900 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
        <div class="container">
            @if ($abouts->count())
                <div class="flex flex-wrap justify-between items-center -mx-4">
                    @foreach ($abouts as $about)
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="flex items-center -mx-3 sm:-mx-4">
                                <div class="w-full xl:w-1/2 px-3 sm:px-4">
                                    <div class="py-3 sm:py-4">
                                        <img src="uploads/abouts/{{ $about->image1 }}" alt=""
                                            class="rounded-2xl w-full" />
                                    </div>
                                    <div class="py-3 sm:py-4">
                                        <img src="uploads/abouts/{{ $about->image2 }}" alt=""
                                            class="rounded-2xl w-full" />
                                    </div>
                                </div>
                                <div class="w-full xl:w-1/2 px-3 sm:px-4">
                                    <div class="my-4 relative z-10">
                                        <img src="uploads/abouts/{{ $about->image3 }}" {{-- src="{{ url('/img/logo.png') }}" --}}
                                            alt="" class="rounded-2xl w-full" />
                                        <x-about-dots></x-about-dots>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                            <div class="mt-10 lg:mt-0">
                                <span class="font-semibold text-lg text-primary mb-2 block">
                                    <blockquote
                                        class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                                        {{-- "Everything is achievable with hard work" --}}
                                        " {{ $about->quote }}"
                                    </blockquote>
                                </span>
                                <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                                    {{ $about->about_title }}
                                </h2>
                                <p class="text-base dark:text-gray-400 mb-8">
                                    {{ $about->description }}
                                </p>
                                {{-- <p class="text-base dark:text-gray-400 mb-8">
              In 2018 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on
              <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br />
              My content is mostly focused on practical examples and projects. <br />
            </p> --}}
                                @if ($profiles->count())
                                    <div class="row mb-3">
                                        @foreach ($profiles as $profile)
                                            <div class="col-sm-6 py-2">
                                                <h6>Name: <span
                                                        class="text-secondary">{{ $profile->full_name }}</span>
                                                </h6>
                                            </div>
                                            <div class="col-sm-6 py-2">
                                                <h6>Birthday: <span
                                                        class="text-secondary">{{ $profile->birthdate }}</span></h6>
                                            </div>

                                            <div class="col-sm-6 py-2">
                                                <h6>Experience: <span
                                                        class="text-secondary">{{ $profile->experience }}</span></h6>
                                            </div>
                                            <div class="col-sm-6 py-2">
                                                <h6>Phone: <span
                                                        class="text-secondary">{{ $profile->phone_number }}</span>
                                                </h6>
                                            </div>
                                            <div class="col-sm-6 py-2">
                                                <h6>Email: <span class="text-secondary">{{ $profile->email }}</span>
                                                </h6>
                                            </div>
                                            <div class="col-sm-6 py-2">
                                                <h6>Address: <span
                                                        class="text-secondary">{{ $profile->address }}</span>
                                                </h6>
                                            </div>

                                    </div>
                                @endforeach
                            @else
                    @endif

                    <x-button-link href="#contact" variant="red" target="_blank">
                        contact me
                    </x-button-link>
                </div>
            @endforeach
        </div>
    @else
        @endif
        </div>
        </div>
    </section>

    {{-- {{$section->education}} --}}
    <section class="pt-20 white:bg-primary lg:pt-[120px] pb-10 lg:pb-20" id="experience">

        <div class="container">
            {{-- <div class="position-relative d-flex align-items-center justify-content-center"> --}}
            <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                {{-- <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1> --}}
                <h2 class="font-bold text-3xl text-dark dark:text-gray-6 mb-4">
                    Education and Experience
                </h2>

                <p class="text-base text-body-color">
                    Let's add my education and experience right now.

                </p>
            </div>
            <div class="row align-items-center text-primary">
                @if ($educations->count())
                    <div class="col-lg-6">

                        <h3 class="mb-4">My Education</h3>

                        <div class="border-left border-primary pt-2 pl-4 ml-2">

                            @foreach ($educations as $education)
                                <div class="position-relative ex-me mb-4">
                                    <i class="far fa-dot-circle text-primary position-absolute"
                                        style="top: 2px; left: -35px;  font-size: 22px;"></i>
                                    <h5 class="font-weight-bold mb-1">
                                        {{ $education->degree_type }},{{ $education->department }}</h5>
                                    <p class="mb-2"><strong>{{ $education->institution_name }}</strong> |
                                        <small>{{ $education->start_year }} - {{ $education->passing_year }}</small>
                                    </p>
                                    <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor
                                        eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem
                                        eirmod duo sit ipsum stet lorem diam</p>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @else
                @endif


                @if ($experiences->count())
                    <div class="col-lg-6">
                        <h3 class="mb-4">My Expericence</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">

                            @foreach ($experiences as $experience)
                                <div class="position-relative ex-me mb-4">
                                    <i class="far fa-dot-circle text-primary position-absolute"
                                        style="top: 2px;left: -35px;  font-size: 22px;"></i>
                                    <h5 class="font-weight-bold mb-1">{{ $experience->responsibility }}</h5>
                                    <p class="mb-2"><strong>{{ $experience->companyname }}</strong> | <small>
                                            {{ $experience->duration }}</small></p>
                                    <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor
                                        eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem
                                        eirmod duo sit ipsum stet lorem diam</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                @endif
            </div>
        </div>
    </section>
    <!-- ====== Portfolio Section End -->
    <section id="portfolio" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
        <div class="swiper mySwiper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h2 class="font-bold text-3xl text-white dark:text-gray-6 mb-4">
                            Projects
                        </h2>
                        <p class="text-base text-body-color mb-5">

                            You learn most by building projects. Go ahead and build something right now.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>

            @if ($projects->count())


                <div class=" swiper-wrapper">

                    @foreach ($projects as $project)
                        <div class=" swiper-slide">

                            <div class="work-box">

                                <a href="uploads/projects/{{ $project->project_images }}" data-lightbox="gallery-mf">
                                    <div class="work-img">
                                        <img src="uploads/projects/{{ $project->project_images }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </a>


                                <div class="work-content   py-3 text-center">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4 class="text-primary">{{ $project->project_title }}</h4>
                                            <div class="w-more" style="">
                                                <p>{{ Illuminate\Support\Str::of($project->project_description)->words(8) }}
                                                </p>
                                                <a href="detail/{{ $project->id }}"
                                                    class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    mb-5
                    inline-block
                    border
                    rounded-md
                    hover:bg-primary hover:border-primary hover:text-white
                    transition
                  ">
                                                    View Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    @endforeach
                </div>
            @else
            @endif


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </div>




    </section>


    <!-- Qualification End -->












    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]" id="services">
        <div class="swiper mySwiper container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                        <h2 class="font-bold text-3xl text-dark dark:text-gray-6 mb-4">
                            Our Services
                        </h2>
                        {{-- <span class="font-semibold text-lg text-primary mb-2 block">
                            Our Services
                        </span> --}}
                        {{-- <h2
                            class="
                     font-bold
                     text-3xl
                     sm:text-4xl
                     md:text-[40px]
                     text-dark
                     mb-4
                     ">
                            What We Offer
                        </h2> --}}
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            @if ($services->count())
                <div class="swiper-wrapper">
                    @foreach ($services as $service)
                        <div class="swiper-slide">

                            <div
                                class="
                  p-10
                  md:px-7
                  xl:px-10
                  rounded-[20px]
                  bg-white
                  shadow-md
                  hover:shadow-lg
                  mb-8
                  ">
                                <div
                                    class="
                     w-[70px]
                     h-[70px]
                     flex
                     items-center
                     justify-center
                     bg-dark
                     rounded-2xl
                     mb-8
                     ">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <a href="service-detail/{{ $service->id }}">
                                    <h4 class="font-semibold text-xl text-dark mb-3">
                                        {{ $service->service_name }}
                                    </h4>
                                </a>
                                <p class="text-body-color">
                                    {{ Illuminate\Support\Str::of($service->description)->words(20) }}
                                    {{-- {{$service->description}} --}}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
            @endif
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script> --}}
    </section>


    <section class="pt-20 dark:bg-primary lg:pt-[120px] pb-10 lg:pb-20" id="subscribe">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
            {{-- <div class="font-semibold text-lg text-primary mb-2 block  "> --}}
            <h2 class="font-semibold  text-lg text-white mb-2 block text-uppercase ">Let's keep in touch</h2>
            <p class="subscribe__copy text-primary">Subscribe to keep up with fresh news and exciting updates. We
                promise not to spam you!</p>
            <div class="form   py-3
px-[14px] ">
                <form action="{{ route('send.email') }}" method="post">
                    @csrf
                    <input type="email" class="form__email  py-3
          px-[14px] bg-dark "
                        placeholder="Enter your email address" />

                    <button type="submit " class=" py-3 px-3 bg-primary text-white">send</button>
                </form>
            </div>

        </div>

    </section>
    <section id="blog" class="blog-mf sect-pt4 route pt-20 dark:bg-slate-900 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="swiper mySwiper container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="title-box text-center">
                        <h2 class="font-bold text-3xl text-white dark:text-gray-6 mb-4">
                            Blog
                        </h2>
                        <p class="text-base text-body-color mb-5">

                            Lets, Go ahead and build something right now.
                        </p>
                        <div class="line-mf"></div>

                    </div>
                </div>
            </div>

            @if ($blogs->count())
                {{-- <div class="row"> --}}

                <div class="swiper-wrapper">


                    @foreach ($blogs as $blog)
                        <div class="swiper-slide col-md-4 text-dark">

                            <div class="card card-blog">


                                <div class="card-img">
                                    <a><img src="uploads/blogs/{{ $blog->image }}" alt=""
                                            class="img-fluid"></a>
                                </div>


                                <div class="card-body">

                                    <div class="card-category-box">
                                        <div class="card-category ">

                                        </div>
                                    </div>

                                    <h3 class="card-title ">
                                        <h1>{{ $blog->topic }}</h1>
                                    </h3>
                                    <p class="card-description">
                                        {{ $blog->content }}
                                    </p>
                                </div>


                                <div class="card-footer bg-dark">
                                    <div class="post-author">
                                        <h5>posted by: {{ $blog->users->name }}</h5>
                                    </div>
                                    <div class="post-date">
                                        <span class="ion-ios-clock-outline"></span> Created on
                                        {{ date('jS M Y', strtotime($blog->updated_at)) }}
                                    </div>

                                </div>






                            </div>

                        </div>
                    @endforeach
                </div>







                {{-- </div> --}}
                <!--row -->
            @else
            @endif

        </div>
        <!--container -->

    </section>


    <!-- ====== Blog Section End -->
    <!-- ====== Team Section Start -->
    <section id="teams" class="pt-20 dark:bg-slate-600 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="swiper mySwiper container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                        <h2 class="font-bold text-3xl text-white dark:text-gray-6 mb-4">
                            Our Awesome Team
                        </h2>
                        {{-- <h2
                            class="
                 font-bold
                 text-3xl
                 sm:text-4xl
                 md:text-[40px]
                 text-dark
                 mb-4
                 ">
                            Our Awesome Team
                        </h2> --}}
                        <p class="text-base text-body-color">


                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            @if ($teams->count())
                <div class="swiper-wrapper">
                    {{-- <div class=" swiper-wrapper flex flex-wrap justify-center -mx-4"> --}}
                    @foreach ($teams as $team)
                        <div class=" swiper-slide w-full md:w-1/2 xl:w-1/4 px-4">
                            <div class="max-w-[370px] w-full mx-auto mb-10">
                                <div class="relative rounded-lg overflow-hidden">
                                    <img src="uploads/teams/{{ $team->photo }}" alt="image" class="w-full" />

                                    <div class="absolute w-full bottom-5 left-0 text-center">
                                        <div
                                            class="
                       bg-white
                       relative
                       rounded-lg
                       overflow-hidden
                       mx-5
                       py-3
                       px-3
                       ">
                                            <h3 class="text-base font-semibold text-dark">
                                                {{ $team->name }}
                                            </h3>
                                            <p class="text-sm text-body-color text-primary">
                                                {{ $team->responsiblity }}
                                            </p>
                                            <div>
                                                <span class="absolute left-0 bottom-0">
                                                    <svg width="61" height="30" viewBox="0 0 61 30"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="45" r="45"
                                                            fill="#13C296" fill-opacity="0.11" />
                                                    </svg>
                                                </span>
                                                <span class="absolute top-0 right-0">
                                                    <svg width="20" height="25" viewBox="0 0 20 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="0.706257" cy="24.3533" r="0.646687"
                                                            transform="rotate(-90 0.706257 24.3533)" fill="#3056D3" />
                                                        <circle cx="6.39669" cy="24.3533" r="0.646687"
                                                            transform="rotate(-90 6.39669 24.3533)" fill="#3056D3" />
                                                        <circle cx="12.0881" cy="24.3533" r="0.646687"
                                                            transform="rotate(-90 12.0881 24.3533)" fill="#3056D3" />
                                                        <circle cx="17.7785" cy="24.3533" r="0.646687"
                                                            transform="rotate(-90 17.7785 24.3533)" fill="#3056D3" />
                                                        <circle cx="0.706257" cy="18.6624" r="0.646687"
                                                            transform="rotate(-90 0.706257 18.6624)" fill="#3056D3" />
                                                        <circle cx="6.39669" cy="18.6624" r="0.646687"
                                                            transform="rotate(-90 6.39669 18.6624)" fill="#3056D3" />
                                                        <circle cx="12.0881" cy="18.6624" r="0.646687"
                                                            transform="rotate(-90 12.0881 18.6624)" fill="#3056D3" />
                                                        <circle cx="17.7785" cy="18.6624" r="0.646687"
                                                            transform="rotate(-90 17.7785 18.6624)" fill="#3056D3" />
                                                        <circle cx="0.706257" cy="12.9717" r="0.646687"
                                                            transform="rotate(-90 0.706257 12.9717)" fill="#3056D3" />
                                                        <circle cx="6.39669" cy="12.9717" r="0.646687"
                                                            transform="rotate(-90 6.39669 12.9717)" fill="#3056D3" />
                                                        <circle cx="12.0881" cy="12.9717" r="0.646687"
                                                            transform="rotate(-90 12.0881 12.9717)" fill="#3056D3" />
                                                        <circle cx="17.7785" cy="12.9717" r="0.646687"
                                                            transform="rotate(-90 17.7785 12.9717)" fill="#3056D3" />
                                                        <circle cx="0.706257" cy="7.28077" r="0.646687"
                                                            transform="rotate(-90 0.706257 7.28077)" fill="#3056D3" />
                                                        <circle cx="6.39669" cy="7.28077" r="0.646687"
                                                            transform="rotate(-90 6.39669 7.28077)" fill="#3056D3" />
                                                        <circle cx="12.0881" cy="7.28077" r="0.646687"
                                                            transform="rotate(-90 12.0881 7.28077)" fill="#3056D3" />
                                                        <circle cx="17.7785" cy="7.28077" r="0.646687"
                                                            transform="rotate(-90 17.7785 7.28077)" fill="#3056D3" />
                                                        <circle cx="0.706257" cy="1.58989" r="0.646687"
                                                            transform="rotate(-90 0.706257 1.58989)" fill="#3056D3" />
                                                        <circle cx="6.39669" cy="1.58989" r="0.646687"
                                                            transform="rotate(-90 6.39669 1.58989)" fill="#3056D3" />
                                                        <circle cx="12.0881" cy="1.58989" r="0.646687"
                                                            transform="rotate(-90 12.0881 1.58989)" fill="#3056D3" />
                                                        <circle cx="17.7785" cy="1.58989" r="0.646687"
                                                            transform="rotate(-90 17.7785 1.58989)" fill="#3056D3" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- </div> --}}
            @else
            @endif
            {{-- <div class="swiper-button-next"></div> --}}
            {{-- <div class="swiper-button-prev"></div> --}}
            <div class="swiper-pagination"></div>
        </div>
        {{-- </div>
        </div> --}}

    </section>


    <!-- ====== Team Section End -->

    <!-- ====== Testimonials Section Start -->



    <section class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px]">
        <div class="container">
            @if ($testimonies->count())
                <div x-data="{
                    slides: ['1', '2', '3', '4', ],
                    activeSlide: 1,
                    activeButton: 'w-[30px] bg-primary',
                    button: 'w-[10px] bg-[#E4E4E4]'
                }">
                    <div class="flex justify-center relative">
                        <div
                            class="
               w-full
               md:w-11/12
               lg:w-10/12
               xl:w-8/12
               relative
               pb-16
               xl:pb-0
               ">
                            <div class="
                  snap
                  w-full
                  max-w-[300px]
                  xs:max-w-[368px]
                  sm:max-w-[508px]
                  md:max-w-[630px]
                  lg:max-w-[738px]
                  2xl:max-w-[850px]
                  mx-auto
                  h-auto
                  flex flex-no-wrap
                  overflow-hidden
                  transition-all
                  "
                                x-ref="carousel">

                                @foreach ($testimonies as $testimony)
                                    <div
                                        class="
                     min-w-[300px]
                     xs:min-w-[368px]
                     sm:min-w-[508px]
                     md:min-w-[630px]
                     lg:min-w-[738px]
                     2xl:min-w-[850px]
                     mx-auto
                     h-full
                     sm:p-6
                     ">
                                        <div class="w-full md:flex items-center">

                                            <div
                                                class="
                           max-w-[310px]
                           md:max-w-[250px]
                           lg:max-w-[280px]
                           w-full
                           md:mr-12
                           lg:mr-14
                           2xl:mr-16
                           mb-12
                           md:mb-0
                           relative
                           ">
                                                <img src="uploads/testimonies/{{ $testimony->photo }}" alt="image"
                                                    class="w-full" />
                                                <span class="absolute z-[-1] -top-6 -left-6 hidden sm:block">
                                                    <svg width="77" height="77" viewBox="0 0 77 77"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="1.66343" cy="74.5221" r="1.66343"
                                                            transform="rotate(-90 1.66343 74.5221)" fill="#3056D3" />
                                                        <circle cx="1.66343" cy="30.94" r="1.66343"
                                                            transform="rotate(-90 1.66343 30.94)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="74.5221" r="1.66343"
                                                            transform="rotate(-90 16.3016 74.5221)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="30.94" r="1.66343"
                                                            transform="rotate(-90 16.3016 30.94)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="74.5221" r="1.66343"
                                                            transform="rotate(-90 30.9398 74.5221)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="30.94" r="1.66343"
                                                            transform="rotate(-90 30.9398 30.94)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="74.5221" r="1.66343"
                                                            transform="rotate(-90 45.578 74.5221)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="30.94" r="1.66343"
                                                            transform="rotate(-90 45.578 30.94)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="74.5216" r="1.66343"
                                                            transform="rotate(-90 60.2162 74.5216)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="74.5216" r="1.66343"
                                                            transform="rotate(-90 74.6634 74.5216)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="30.9398" r="1.66343"
                                                            transform="rotate(-90 60.2162 30.9398)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="30.9398" r="1.66343"
                                                            transform="rotate(-90 74.6634 30.9398)" fill="#3056D3" />
                                                        <circle cx="1.66343" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 1.66343 59.8839)" fill="#3056D3" />
                                                        <circle cx="1.66343" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 1.66343 16.3017)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 16.3016 59.8839)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 16.3016 16.3017)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 30.9398 59.8839)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 30.9398 16.3017)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 45.578 59.8839)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 45.578 16.3017)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 60.2162 59.8839)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="59.8839" r="1.66343"
                                                            transform="rotate(-90 74.6634 59.8839)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 60.2162 16.3017)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="16.3017" r="1.66343"
                                                            transform="rotate(-90 74.6634 16.3017)" fill="#3056D3" />
                                                        <circle cx="1.66343" cy="45.2455" r="1.66343"
                                                            transform="rotate(-90 1.66343 45.2455)" fill="#3056D3" />
                                                        <circle cx="1.66343" cy="1.66342" r="1.66343"
                                                            transform="rotate(-90 1.66343 1.66342)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="45.2455" r="1.66343"
                                                            transform="rotate(-90 16.3016 45.2455)" fill="#3056D3" />
                                                        <circle cx="16.3016" cy="1.66342" r="1.66343"
                                                            transform="rotate(-90 16.3016 1.66342)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="45.2455" r="1.66343"
                                                            transform="rotate(-90 30.9398 45.2455)" fill="#3056D3" />
                                                        <circle cx="30.9398" cy="1.66342" r="1.66343"
                                                            transform="rotate(-90 30.9398 1.66342)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="45.2455" r="1.66343"
                                                            transform="rotate(-90 45.578 45.2455)" fill="#3056D3" />
                                                        <circle cx="45.578" cy="1.66344" r="1.66343"
                                                            transform="rotate(-90 45.578 1.66344)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="45.2458" r="1.66343"
                                                            transform="rotate(-90 60.2162 45.2458)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="45.2458" r="1.66343"
                                                            transform="rotate(-90 74.6634 45.2458)" fill="#3056D3" />
                                                        <circle cx="60.2162" cy="1.66371" r="1.66343"
                                                            transform="rotate(-90 60.2162 1.66371)" fill="#3056D3" />
                                                        <circle cx="74.6634" cy="1.66371" r="1.66343"
                                                            transform="rotate(-90 74.6634 1.66371)" fill="#3056D3" />
                                                    </svg>
                                                </span>
                                                <span class="absolute z-[-1] -bottom-6 -right-6">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z"
                                                            stroke="#13C296" stroke-width="6" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="w-full">
                                                <div>
                                                    <div class="mb-7">
                                                        <img src="https://cdn.tailgrids.com/1.0/assets/images/testimonials/testimonial-01/lineicon.svg"
                                                            alt="lineicon" />
                                                    </div>
                                                    <p
                                                        class="
                                 font-medium
                                 italic
                                 text-body-color text-base
                                 sm:text-lg
                                 mb-11
                                 ">
                                                        {{ $testimony->comment }}
                                                    </p>
                                                    <h4 class="font-semibold text-dark text-xl">
                                                        {{ $testimony->name }}
                                                    </h4>
                                                    <p class="text-body-color text-base">
                                                        {{ $testimony->role }}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div
                                class="
                  absolute
                  left-0
                  right-0
                  bottom-0
                  flex
                  items-center
                  justify-center
                  lg:pl-[120px]
                  2xl:pl-0
                  ">
                                <button
                                    class="
                     w-12
                     h-12
                     rounded-full
                     flex
                     items-center
                     justify-center
                     bg-primary
                     text-primary
                     hover:bg-white hover:text-primary
                     transition-all
                     shadow-input
                     mx-1
                     mb-5
                     "
                                    @click="$refs.carousel.scrollLeft=$refs.carousel.scrollLeft - ($refs.carousel.scrollWidth
                                / slides.length); activeSlide -=1">
                                    <svg width="15" height="13" viewBox="0 0 15 13" class="fill-current">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z" />
                                    </svg>
                                </button>
                                <button
                                    class="
                     w-12
                     h-12
                     rounded-full
                     flex
                     items-center
                     justify-center
                     bg-primary
                     text-primary
                     hover:bg-white hover:text-primary
                     transition-all
                     shadow-input
                     mx-1
                     mb-5
                     "
                                    @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1">
                                    <svg width="15" height="13" viewBox="0 0 15 13" class="fill-current">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- ====== Testimonials Section End -->
    {{-- <x-home.gallery></x-home.gallery> --}}
    {{-- <x-home.testimonials></x-home.testimonials> --}}
    <section class="dark:bg-slate-800 pt-24 pb-16 " id="gallery">
        <div class="swiper mySwiper container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                        <h2 class="font-bold text-3xl text-white dark:text-gray-6 mb-4">
                            Gallery
                        </h2>
                        <p class="text-base text-body-color mb-5">

                            You learn most by building projects. Go ahead and build something right now.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" swiper-wrapper ">

                @foreach ($images as $image)
                    <div class="swiper-slide col-lg-4 col-md-6 mb-4 portfolio-item third">
                        <div class="position-relative overflow-hidden mb-2">

                            <img class="img-fluid rounded w-100" src="uploads/images/{{ $image->images }}"
                                style="height:300px;"alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="uploads/images/{{ $image->images }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        {{-- <div class="w-full md:w-1/2 xl:w-1/3 px-4">
         <div class="bg-white rounded-lg mb-10"> --}}

        <!-- ====== Video Section Start -->
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper">
                @foreach ($videos as $video)
                    <div class=" swiper-slide col-lg-4 col-md-6 mb-4 portfolio-item third">
                        <div class="position-relative overflow-hidden mb-2">

                            <div x-data="{
                                videoOpen: false,
                                videoUrl: 'uploads/videos/{{ $video->video }}?autoplay=1',
                                url: '',
                            }">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full aspect-video relative z-20">
                                        <div class="w-full h-full absolute top-0 left-0 p-3">
                                            <!-- Thumbnail -->
                                            <img src="uploads/videos/{{ $video->video }}/original.jpg" alt="image"
                                                class="w-full h-full object-center object-cover rounded-lg" />
                                            <!-- /Thumbnail -->
                                        </div>
                                        <div
                                            class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-primary bg-opacity-0 z-10">
                                            <!-- Play Video -->
                                            <a href="javascript:void(0)" @click="videoOpen = true; url = videoUrl"
                                                class="flex items-center justify-center w-20 md:w-[70px] h-20 md:h-[70px] rounded-full bg-white text-primary absolute z-20">
                                                   <span
                                                    class="absolute w-full h-full rounded-full top-0 right-0 bg-white bg-opacity-20 z-[-1] animate-ping delay-300 duration-1000"></span>

                                                <!-- Play Icon -->
                                                <svg width="23" height="27" viewBox="0 0 23 27"
                                                    class="fill-current">
                                                    <path
                                                        d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z" />
                                                </svg>

                                                <!-- /Play Icon -->
                                            </a>
                                            <!-- /Play Video -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Video -->
                                <div x-show="videoOpen" x-transition
                                    class="fixed top-0 left-0 w-full h-screen flex items-center justify-center z-50 bg-black bg-opacity-70">
                                    <div @click.outside="videoOpen = false; url = ''"
                                        class="w-11/12 md:w-10/12 xl:w-8/12 mx-auto bg-white">
                                        <iframe class="w-full aspect-video" x-bind:src="url">
                                        </iframe>
                                    </div>
                                    <button @click="videoOpen = false"
                                        class="absolute top-0 right-0 w-20 h-20 flex items-center justify-center cursor-pointer text-body-color hover:bg-black">
                                        <svg viewBox="0 0 16 15" class="fill-current w-8 h-8">
                                            <path
                                                d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z" />
                                        </svg>
                                    </button>

                                </div>
                                <!-- /Video -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- </div> --}}


    </section>
    {{-- @endforeach
   @endif --}}
    <x-home.contact></x-home.contact>

    <!-- ====== Contact Section End -->
    <!-- ====== Footer Section Start -->
    <footer class="bg-gray-200 dark:bg-slate-900 py-8 relative z-10">
        <div class="container">
            <div class="flex flex-wrap justify-between">
                <span class="inline-flex items-center text-xl">
                    Follow me on Social Media
                </span>
                {{-- <x-social-icons class="mb-0"></x-social-icons> --}}
                <div class="flex items-center">
                    @foreach ($socials as $social)
                        <a href="{{ $social->url }}" target="_blank"
                            class="
                w-10
                h-10
                flex
                items-center
                justify-center
                rounded-full
                border
                border-primary
                border-2
                dark:border-white
                text-dark
                dark:text-white
                hover:text-white
                hover:bg-primary
                hover:border-primary
                hover:dark:border-primary
                mr-3
                sm:mr-4
                lg:mr-3
                xl:mr-4
           ">
                            <span class="fa fa-{{ $social->icon }}"></span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 bottom-0 z-[-1]">
                <svg width="217" height="229" viewBox="0 0 217 229" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                        fill="url(#paint0_linear_1179_5)" />
                    <defs>
                        <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5"
                            y2="1.22829e-05" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3056D3" stop-opacity="0.08" />
                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="absolute top-5 right-10 z-[-1]">
                <svg width="75" height="75" viewBox="0 0 75 75" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                        fill="url(#paint0_linear_1179_4)" />
                    <defs>
                        <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75"
                            y2="37.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#13C296" stop-opacity="0.31" />
                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
    </footer>
    {{-- @endif --}}
    <!-- ====== Footer Section End -->
</x-app-layout>
