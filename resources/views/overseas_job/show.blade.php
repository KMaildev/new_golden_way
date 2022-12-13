@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground"
        data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="title">
                        Overseas Jobs
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <p>
                                Our New Golden Way Agency sent many workers to abroad by given them good training and
                                leading provice of Human Resource Development Service.
                            </p>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="{{ asset('assets/images/bg/06.png') }}" alt="">
        </div>
    </section>

    <section class="light-bg position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-6 col-md-12 p-3">
                        <div class="featured-item style-3">
                            <div class="featured-icon">
                                <img class="img-fluid" src="{{ asset('assets/images/feature/04.png') }}" alt="">
                            </div>
                            <div class="featured-title">
                                <h5>
                                    @if (session('key') == 'jp')
                                        {{ $job->title_jp ?? '' }}
                                    @else
                                        {{ $job->title ?? '' }}
                                    @endif
                                </h5>
                            </div>
                            <hr>
                            <div class="featured-desc">
                                <ul class="contact-info list-unstyled">
                                    <li class="mb-4">
                                        <i class="flaticon-email"></i>
                                        <span>Email</span>
                                        <a href="mailto:info@newgoldenway.com">
                                            info@newgoldenway.com
                                        </a>
                                    </li>

                                    <li class="mb-4">
                                        <i class="flaticon-call"></i>
                                        <span>Phone:</span>
                                        <a href="tel:+959 45 888 7103">
                                            +959 45 888 7103,
                                        </a>
                                        <a href="tel:+959 43 43 6666">
                                            +959 43 43 6666
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
