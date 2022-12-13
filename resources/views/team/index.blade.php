@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground"
        data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="title">Team</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="">
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Our Teams</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="{{ asset('assets/images/bg/06.png') }}" alt="">
        </div>
    </section>

    <section class="bg-contain" data-bg-img="images/pattern/02.png">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h6>Creative Team</h6>
                        <h2 class="title">Meet Our Expert team member will ready for your service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5 mt-md-0">
                        <div class="team-member active">
                            <div class="team-images">
                                <img class="img-fluid" src="{{ $team->photo }}" alt=""
                                    style="width: 100%; height: 310px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="team-description">
                                <span>{{ $team->position ?? '' }}</span>
                                <h5>{{ $team->name ?? '' }}</h5>
                                <div class="team-social-icon">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
