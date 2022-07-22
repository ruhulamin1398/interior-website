  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="nav-content container-fluid">
                <a class="navbar-brand" href="{{route('home-index')}}">
                    <img loading="lazy" class="d-inline-block align-top" src="{{asset('theme/frontend/img/logo.png')}}" alt="brand-logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="main-menu collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link  home" aria-current="page" href="{{route('home-index')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link about-us " href="{{route('about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clients" href="{{route('front.brand')}}">Our Clients</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle interior-service construction-service " href="#" data-bs-toggle="dropdown"
                                id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item interior-service" href="{{route('front-interior')}}">Interior</a></li>
                                <li><a class="dropdown-item construction-service " href="{{route('front-cons')}}">Construction</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link contact-us" href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="quote-btn">
                    <a class="nav-link" href="{{route('quote')}}">Get a quote</a>
                </div>
            </div>
        </nav>
        <!-- navbar end -->