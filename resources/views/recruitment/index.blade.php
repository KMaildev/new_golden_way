@extends('layouts.app')
@section('content')
    <br>
    <section class="text-center py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center py-5">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title">
                        <h2 class="title">Our Recruitment Services Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <hr>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/r.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">01</span>
                            </div>
                            <h4>Registration</h4>
                            <p class="mb-0">Please complete your registration via the entry form</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4"
                    style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/i.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">02</span>
                            </div>
                            <h4>Interview
                            </h4>
                            <p class="mb-0">
                                We will listen to your experiences and your requirements
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4"
                    style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/j-i.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">03</span>
                            </div>
                            <h4>
                                Job Introduction
                            </h4>
                            <p class="mb-0">We will introduce the most suitable jobs for you</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4"
                    style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/j-a.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">04</span>
                            </div>
                            <h4>
                                Job Apply
                            </h4>
                            <p class="mb-0">
                                Choose which jobs you would like to apply to
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4"
                    style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/i2.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">05</span>
                            </div>
                            <h4>Job Interview

                            </h4>
                            <p class="mb-0">
                                We will support you through the interview process and share useful tips for
                                all types of interview
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 p-4"
                    style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                    <div class="work-process">
                        <div class="work-process-inner">
                            <div class="work-img">
                                <img class="img-fluid" src="{{ asset('data/offer.png') }}" alt=""
                                    style="width:80px; height:80px;">
                                <span class="step-num">06</span>
                            </div>
                            <h4>
                                Offer・New Journey
                            </h4>
                            <p class="mb-0">
                                We will handle the salary negotiation and follow up
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
