@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground"
        data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="title">About Us</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="">
                                <a href="{{ route('welcome') }}">Home /</a>
                            </li>
                            <li class=" " aria-current="">About Us</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="{{ asset('assets/images/bg/06.png') }}" alt="">
        </div>
    </section>

    <section data-bg-img="{{ asset('assets/images/pattern/02.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-block">
                                <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/jp.webp') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="image-block">
                                <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/m.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 sm-mt-3">
                            <div class="image-block">
                                <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/t.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="image-block">
                                <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/s.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="section-title mb-3">
                        <h6>About of Our Company</h6>
                        <h2>New Golden Way</h2>
                    </div>
                    <p class="text-black">
                        Our company which holds the recruitment license issued in Myanmar. Our experience
                        is the key to our success and also the reason that most of our Clients are associated with us for
                        over a Decade.
                        We have grown over the years with a strong commitmet,responsibility and transparency bound together
                        by family values.
                    </p>
                    <ul class="custom-li list-unstyled list-icon-2 my-3 d-inline-block">
                        <li>Responsibility</li>
                        <li>Integrity</li>
                        <li>Collaborative</li>
                        <li>Determination</li>
                        <li>Commitment</li>
                        <li>Mission & Focus</li>
                    </ul>
                    <a class="btn btn-theme" href="{{ route('contact.index') }}">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/01.png') }}" alt=""> <span
                            class="count-number" data-to="2304" data-speed="10000">2304</span>
                        <h5>SENDING EMPLOYEES</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-sm-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/02.png') }}" alt=""> <span
                            class="count-number" data-to="2304" data-speed="10000">2304</span>
                        <h5>OUR EXPERIENCES</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/03.png') }}" alt=""> <span
                            class="count-number" data-to="2304" data-speed="10000">2304</span>
                        <h5>JOBS AVAILABLE</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/04.png') }}" alt=""> <span
                            class="count-number" data-to="2304" data-speed="10000">2304</span>
                        <h5>OUR PARTNERS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="light-bg" data-bg-img="images/bg/02.png">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h6>Our Company</h6>
                        <h2 class="title">Vision, Mission & Value</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab text-center">
                        <!-- Nav tabs -->

                        <!-- Tab panes -->
                        <div class="tab-content px-0 pb-0" id="nav-tabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="price-table">
                                            <div class="round-p-animation"></div>
                                            <div class="price-header">
                                                <h3 class="price-title" style="text-shadow:3px 4px 4px ;">Our Vision</h3>
                                            </div>
                                            <img class="img-fluid my-4" src="{{ asset('data/v1.png') }}" alt=""
                                                style="width:70px;height:70px;  filter:drop-shadow(4px 4px 4px #46464c);">
                                            <div class="price-value">

                                            </div>
                                            <div class="price-list">
                                                <p style="font-family:'Times New Roman', Times, serif; font-size:16px;">
                                                    To enable the discovery of opportunities by providing consistently
                                                    flexible Recruitment solutions.</p>
                                            </div>
                                            <br><br><br><br>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="price-table">
                                            <div class="round-p-animation"></div>
                                            <div class="price-header">
                                                <h3 class="price-title" style="text-shadow:3px 4px 4px ;">Our Mission</h3>
                                            </div>
                                            <img class="img-fluid my-4" src="{{ asset('data/m.png') }}" alt=""
                                                style="width:70px;height:70px;  filter:drop-shadow(4px 4px 4px #46464c);">
                                            <div class="price-value">

                                            </div>
                                            <div class="price-list">
                                                <p style="font-family:'Times New Roman', Times, serif;  font-size:16px;">
                                                    To bring success to all of our clients by our relentless commitment to
                                                    deliver the highest quality talent more quickly, efficiently,
                                                    intelligently and above all to ensure the complete satisfaction of both
                                                    the job applicant and the employer.</p>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <div class="price-table">
                                            <div class="round-p-animation"></div>
                                            <div class="price-header">
                                                <h3 class="price-title" style="text-shadow:3px 4px 4px ;">Our Values</h3>
                                            </div>
                                            <img class="img-fluid my-4" src="{{ asset('data/v.png') }}" alt=""
                                                style="width:70px;height:70px; filter:drop-shadow(4px 4px 4px #46464c);">
                                            <div class="price-value">

                                            </div>
                                            <div class="">
                                                <p style="font-family:'Times New Roman', Times, serif; font-size:16px;">
                                                    To deliver customized and cost-effective solutions to organizations
                                                    across the globe that gives them an edge over their competitors.
                                                </p>
                                                <p style="font-family:'Times New Roman', Times, serif; font-size:16px;"> To
                                                    identify the right talent and goals thus helping them secure the right
                                                    jobs.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
