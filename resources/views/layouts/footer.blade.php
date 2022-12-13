<footer class="footer white-bg z-index-1 overflow-hidden bg-contain"
    data-bg-img="{{ asset('assets/images/pattern/01.png') }}">
    <div class="round-p-animation"></div>
    <div class="primary-footer">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ht-theme-info bg-contain bg-pos-r h-100 dark-bg text-white"
                        data-bg-img="{{ asset('assets/images/bg/02.png') }}">

                        <div class="footer-logo">
                            <img class="img-fluid" src="{{ asset('data/logo.png') }}" alt="">
                        </div>

                        <p class="mb-3">
                            Our company which holds the recruitment license issued in Myanmar.</p>
                        <a class="btn-simple" href="{{ route('about.index') }}">
                            <span>
                                Read More
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </a>

                        <div class="social-icons social-border circle social-hover mt-5">
                            <h4 class="title">Follow Us</h4>
                            <ul class="list-inline">
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 py-8 px-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 footer-list">
                            <h4 class="title">Useful Links</h4>
                            <div class="row">
                                <div class="col-sm-5">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{ route('about.index') }}">Our Company</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('organization.index') }}">Our Organization Chart</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('team.index') }}">Our Teams</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{ route('cv.index') }}">
                                                Submit CV
                                            </a>
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
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                            <h4 class="title">Contact us</h4>
                            <ul class="media-icon list-unstyled">
                                <li>
                                    <p class="mb-0">No.A-4, Room(804), Bo Min Yaung Housing, (42)Quater,North Dagon
                                        Tsp, Yangon, Myanmar.</p>
                                </li>
                                <li>
                                    <a href="mailto:newgoldenwayservices@gmail.com">newgoldenwayservices@gmail.com</a>
                                </li>
                                <li>
                                    <a href="tel:+959 45 888 7103">+959 45 888 7103</a>
                                </li>
                                <li>
                                    <a href="tel:+959 43 43 6666">+959 43 43 6666</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer">
        <div class="container">
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <span>Copyright {{ now()->year }} | All Rights Reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-upload"></i></a></div>
