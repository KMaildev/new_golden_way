@extends('layouts.app')
@section('content')
    <section class="bg-contain bg-pos-r position-relative overflow-hidden"
        data-bg-img="{{ asset('assets/images/bg/03.png') }}">
        <div class="insideText">About us</div>
        <div class="container-fluid px-lg-3 px-md-8 px-3">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
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
                <div class="col-lg-6 col-md-12 me-auto mt-5 mt-lg-0 ps-lg-11">
                    <div class="section-title mb-3">
                        <h6>About Us</h6>
                        <h2>New Golden Way <br><span style="font-size:20px;">Overseas Employment Agency.</span></h2>
                    </div>
                    <p class="text-black">Our company which holds the recruitment license issued in Myanmar. Our experience
                        is the key to our success and also the reason that most of our Clients are associated with us for
                        over a Decade.
                        We have grown over the years with a strong commitmet,responsibility and transparency bound together
                        by family values.</p>
                    <ul class="custom-li list-unstyled list-icon-2 my-3 d-inline-block">
                        <li>Responsibility</li>
                        <li>Integrity</li>
                        <li>Collaborative</li>
                        <li>Determination</li>
                        <li>Commitment</li>
                        <li>Mission & Focus</li>
                    </ul>
                    <a class="btn btn-theme" href="{{ route('about.index') }}">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/01.png') }}" alt=""> <span
                            class="count-number" data-to="2304" data-speed="10000">2304</span>
                        <h5>SENDING EMPLOYEES
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-sm-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/02.png') }}" alt=""> <span
                            class="count-number" data-to="3585" data-speed="10000">3585</span>
                        <h5>OUR EXPERIENCES
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/03.png') }}" alt=""> <span
                            class="count-number" data-to="1365" data-speed="10000">1365</span>
                        <h5> JOBS AVAILABLE
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <div class="counter style-2">
                        <img class="img-fluid" src="{{ asset('assets/images/counter/04.png') }}" alt=""> <span
                            class="count-number" data-to="4328" data-speed="10000">4328</span>
                        <h5>OUR PARTNERS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg position-relative overflow-hidden">
        <div class="insideText">Service</div>
        <div class="pattern-3">
            <img class="img-fluid rotateme" src="{{ asset('assets/images/pattern/03.png') }}" alt="">
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-title">
                    <h6>Our Services</h6>
                    <h4 class="title">Overseas jobs and international employment opportunities for professionals & Freshers
                        Job Seekers.</h4>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row justify-content-center">
                <style>
                    .img-css {
                        box-shadow: 0px 12px 12px -10px rgb(0 0 0 / 75%);
                        width: 70px;
                        height: 40px;
                        object-fit: contain;
                    }
                </style>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left; margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/jp.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        Japan
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left; margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/t.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        Thailand
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left;
        margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/m.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        Malaysia
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left;
        margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/s.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        Singapore
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left;
        margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/uae.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        UAE
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"
                    style="padding-top: 12px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 100px;float: left; margin: 8px; ">
                    <center>
                        <img class="img-css" src="{{ asset('assets/images/feature/kuwait.png') }}" alt="">
                    </center>
                    <p style="text-align: center; color: red;">
                        Kuwait
                    </p>
                </div>
            </div>

    </section>

    <section data-bg-img="{{ asset('assets/images/pattern/02.png') }}" class="text-center overflow-hidden">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title">
                        <h6>How It Work</h6>
                        <h2 class="title">Three Step For Started Working Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('assets/images/how-it-work/01.png') }}"
                                    alt="">
                                <span class="step-num">01</span>
                            </div>
                            <h4>Choose the country</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 mt-5 mt-lg-0">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('assets/images/how-it-work/02.png') }}"
                                    alt="">
                                <span class="step-num">02</span>
                            </div>
                            <h4>Find the right jobs.</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 mt-5 mt-lg-0">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('assets/images/feature/07.png') }}" alt="">
                                <span class="step-num">03</span>
                            </div>
                            <h4>Submit Resume</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 mt-5 mt-lg-0">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('assets/images/how-it-work/03.png') }}"
                                    alt="">
                                <span class="step-num">04</span>
                            </div>
                            <h4>Apply Jobs</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg position-relative overflow-hidden">
        <div class="insideText" style="font-size:150px;">Our Activities</div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h6>Our Activities</h6>
                        <h2 class="title">Read our latest news</h2>
                        {{-- <p class="mb-0 text-black">Deos et accusamus et iusto odio dignissimos qui blanditiis praesentium voluptatum dele corrupti quos dolores et quas molestias.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="post">
                        <div class="post-image">
                            <img class="img-fluid h-100 w-100" src="{{ asset('assets/images/blog/01.jpg') }}"
                                alt="">
                        </div>
                        <div class="post-desc">
                            <div class="post-date">23 <span>November 2018</span>
                            </div>
                            <div class="post-title">

                            </div>

                            <div class="post-author">
                                <div class="post-author-img">
                                    <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}"
                                        alt="">
                                </div> <span>NGW</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="post">
                        <div class="post-image">
                            <img class="img-fluid h-100 w-100" src="{{ asset('assets/images/blog/01.jpg') }}"
                                alt="">
                        </div>
                        <div class="post-desc">
                            <div class="post-date">23 <span>November 2018</span>
                            </div>
                            <div class="post-title">

                            </div>

                            <div class="post-author">
                                <div class="post-author-img">
                                    <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}"
                                        alt="">
                                </div> <span>NGW</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="post">
                        <div class="post-image">
                            <img class="img-fluid h-100 w-100" src="{{ asset('assets/images/blog/01.jpg') }}"
                                alt="">
                        </div>
                        <div class="post-desc">
                            <div class="post-date">23 <span>November 2018</span>
                            </div>
                            <div class="post-title">

                            </div>

                            <div class="post-author">
                                <div class="post-author-img">
                                    <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}"
                                        alt="">
                                </div> <span>NGW</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="post">
                        <div class="post-image">
                            <img class="img-fluid h-100 w-100" src="{{ asset('assets/images/blog/01.jpg') }}"
                                alt="">
                        </div>
                        <div class="post-desc">
                            <div class="post-date">23 <span>November 2018</span>
                            </div>
                            <div class="post-title">

                            </div>

                            <div class="post-author">
                                <div class="post-author-img">
                                    <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}"
                                        alt="">
                                </div> <span>NGW</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
