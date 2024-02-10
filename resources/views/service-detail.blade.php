<x-app-layout>
    <header x-data="{ navbarOpen: false }"
        class="fixed left-0 top-0 z-50  w-full flex items-center shadow-md dark:bg-slate-900 h-24 text-white"
        {{-- class="fixed right-0 top-full  py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none" --}}>
        @if ($homes->count())
            <div class="container">
                @foreach ($homes as $home)
                    <div class="flex -mx-4 items-center justify-between relative">
                        <div class="pr-4 w-60 max-w-full">


                            <img {{-- src="{{url('uploads/homes/'.{{$home->logo) }}" --}} src="{{ url('uploads/homes/' . $home->logo) }}" alt="logo"
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
                                                href="/#home">Home</a></li>
                                        <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                                href="/#about">About</a></li>
                                        <li><a
                                                class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="/#services">Services</a>
                                        </li>
                                        <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                                href="/#portfolio" class="menu-btn">Portfolio</a></li>
                                        <li><a
                                                class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="/#blog">Blog</a>
                                        </li>
                                        <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                                href="/#experience" class="menu-btn">Experience</a></li>
                                        <li><a
                                                class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"href="/#teams">Teams</a>
                                        </li>
                                        <li><a class="text-xs font-medium text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                                href="/#gallery" class="menu-btn">Gallery</a></li>
                                        <li><a class="text-xs font-large text-white py-4 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12"
                                                href="/#contact" class="menu-btn">Contact</a></li>
                                        <li><a href="#subscribe" class="btn btn-outline-danger lg:ml-6 xl:ml-12 "
                                                href="#subscribe">subscribe</a></li>

                                    </ul>
                                </nav>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </header>
    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] bg-white">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                        <h2 class="font-bold text-3xl text-dark dark:text-gray-6 mb-4">
                            Our Services
                        </h2>
                        <h4
                            class="
                      {{-- font-semibold --}}
                      text-3xl
                      sm:text-4xl
                      md:text-[40px]
                      text-dark
                      mb-4
                      ">
                            What We Offer
                        </h4>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4">

                <div class="w-full  px-4">
                    <a href="/#service">
                        <div
                            class="
                   {{-- p-10
                   md:px-7
                   xl:px-10 --}}
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg

                   mb-8
                   ">
                            <div
                                class="
                      {{-- w-[120px]
                      h-[50px] --}}
                     
                      flex
                      items-center
                      justify-center
                      bg-secondary
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
                            <h4 class="font-semibold text-xl text-dark mb-3 text-center">
                                {{ $service->service_name }}
                            </h4>
                            <p class="text-body-color">
                                {{ $service->description }}
                            </p>
                        </div>
                    </a>

                </div>



            </div>
            {{-- </div> --}}
        </div>
        </div>

    </section>
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
                text-white
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
</x-app-layout>
