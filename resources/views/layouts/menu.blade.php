<header id="site-header" class="header">
    <div id="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="{{ route('welcome') }}">
                            <img id="logo-img" class="img-fluid" src="{{ asset('assets/images/logo.png') }}"
                                alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation"> <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto position-relative">

                                <li class="">
                                    <a class="nav-link active " href="{{ route('welcome') }}">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                        About Us
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('about.index') }}">Our Company</a>
                                            </li>
                                            <li>
                                                <a href="">Our Organization Chart</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('team.index') }}">Our Teams</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                        Services
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('recruitment.index') }}">Our Recruitment Services</a>
                                            </li>

                                            @foreach ($countryies as $country)
                                                <li>
                                                    <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                                        {{ $country->title ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                        Jobs Apply
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('cv.index') }}">
                                                    Submit CV
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('employer.index') }}">Employer Form</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('activities.index') }}">
                                        Our Activities
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('set_eng') }}" class="nav-link">
                            <img src="{{ asset('data/us.gif') }}" style="width: 40px;">
                        </a>


                        <a href="{{ route('set_jp') }}" class="nav-link">
                            <img src="{{ asset('data/jp.jpeg') }}" style="width: 40px;">
                        </a>

                        <div class="right-nav align-items-center d-flex justify-content-end">
                            <a class="btn btn-white btn-sm" href="">Call Now</a>
                            <div class="search">
                            </div> <a href="#" class="ht-nav-toggle"><span></span></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<nav id="ht-main-nav"> <a href="#" class="ht-nav-toggle active"><span></span></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid side-logo mb-3" src="{{ asset('assets/images/logo.png') }}" alt="">
                <p class="mb-5">New Golden Way Overseas Employment Agency is one of the recruitment agencies in
                    Myanmar.</p>
                <div class="form-info">
                    <h4 class="title">Contact info</h4>
                    <ul class="contact-info list-unstyled mt-4">
                        <li class="mb-4"><i class="flaticon-location"></i><span>Address:</span>
                            <p>No.A-4, Room(804), Bo Min Yaung Housing, (42)Quater,North Dagon Tsp, Yangon, Myanmar.
                            </p>
                        </li>
                        <li class="mb-4"><i class="flaticon-call"></i><span>Phone:</span><a
                                href="tel:+959 45 888 7103">+959 45 888 7103</a>
                        </li>
                        <li class="mb-4"><i class="flaticon-call"></i><span>Phone:</span><a
                                href="tel:+959 43 43 6666">+959 43 43 6666</a>
                        </li>
                        <li><i class="flaticon-email"></i><span>Email</span><a
                                href="mailto:newgoldenwayservices@gmail.com"> newgoldenwayservices@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="social-icons social-colored mt-5">
                    <ul class="list-inline">
                        <li class="mb-2 social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="mb-2 social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="mb-2 social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="mb-2 social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
