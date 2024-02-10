<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
        <i class="nav-icon fas fa-about"></i>
        <p>About</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('project') }}" class="nav-link {{ Request::is('project') ? 'active' : '' }}">
        <i class="nav-icon fas fa-about"></i>
        <p>Projects</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('education') }}" class="nav-link {{ Request::is('educations') ? 'active' : '' }}">
        <i class="nav-icon fas fa-about"></i>
        <p>Education</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('service') }}" class="nav-link {{ Request::is('services') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Services</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('experience') }}" class="nav-link {{ Request::is('experiences') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Experience</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('blog') }}" class="nav-link {{ Request::is('blogs') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Blogs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('testimony') }}" class="nav-link {{ Request::is('testimonies') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Testimonies</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('team') }}" class="nav-link {{ Request::is('teams') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Teams</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('profile') }}" class="nav-link {{ Request::is('profiles') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Profile</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('image') }}"class="nav-link dropdown-toggle {{ Request::is('images') ? 'active' : '' }}"
        href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="nav-icon fas fa-service"></i>
        <p>Gallery</p>
    </a>
    {{-- <a href="{{ route('image') }}" class="nav-link {{ Request::is('galleries') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Profile</p>
    </a> --}}
    <div class="dropdown-menu" aria-labelledby="navbarDropdown4" style="background:black">
        <a href="{{ route('image') }}" class="dropdown-item {{ Request::is('images') ? 'active' : '' }}">Images</a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('video') }}" class="dropdown-item {{ Request::is('videos') ? 'active' : '' }}">videos</a>


    </div>
</li>
{{-- <li class="nav-item">
    <a href="{{ route('section') }}" class="nav-link {{ Request::is('section') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>sec-control</p>
    </a>
</li> --}}
<li class="nav-item">
    <a href="{{ route('social') }}" class="nav-link {{ Request::is('socials') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>social_icons</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="{{ route('template') }}" class="nav-link {{ Request::is('templates') ? 'active' : '' }}">
        <i class="nav-icon fas fa-service"></i>
        <p>Templates</p>
    </a>
</li> --}}
