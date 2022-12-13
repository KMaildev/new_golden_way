@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground"
        data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="title">Contact Us</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
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

    <div class="page-content">

        <section class="contact-1" data-bg-img="{{ asset('assets/images/pattern/02.png') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="section-title mb-2">
                            <h6>Get In Touch</h6>
                            <h2 class="title">Contact Us</h2>
                            <p>
                                Please feel free to contact us
                            </p>
                        </div>
                        <div class="contact-main">
                            @include('layouts.alert')
                            <form class="row g-4 needs-validation" autocomplete="off" action="{{ route('contact.store') }}"
                                method="POST" id="create-form">
                                @csrf
                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" value="{{ old('name') }}"
                                            placeholder="Your Name*" name="name">
                                        @error('name')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Phone</label>
                                        <input class="form-control" type="text" value="{{ old('phone') }}"
                                            placeholder="Your Phone*" name="phone">
                                        @error('phone')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="custom-input-group">
                                        <label for="name">Email</label>
                                        <input class="form-control" name="email" type="text"
                                            value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="custom-input-group">
                                        <label for="name">Subject</label>
                                        <input class="form-control" name="subject" type="text"
                                            value="{{ old('subject') }}" placeholder="Subject*">
                                        @error('subject')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-theme btn-radius">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 ms-auto mt-5 mt-md-0">
                        <ul class="contact-info list-unstyled">
                            <li class="mb-4"><i class="flaticon-location"></i><span>Address:</span>
                                <p>
                                    No.A-4, Room(804), Bo Min Yaung Housing, (42)Quater,North Dagon Tsp, Yangon, Myanmar.
                                </p>
                            </li>

                            <li class="mb-4">
                                <i class="flaticon-email"></i>
                                <span>Email</span>
                                <a href="mailto:info@newgoldenway.com">
                                    info@newgoldenway.com
                                </a>
                            </li>

                            <li class="mb-4">
                                <i class="flaticon-email"></i>
                                <span>Gmail</span>
                                <a href="mailto:newgoldenwayservices@gmail.com">
                                    newgoldenwayservices@gmail.com
                                </a>
                            </li>

                            <li class="mb-4">
                                <i class="flaticon-call"></i>
                                <span>Phone:</span>
                                <a href="tel:+959 45 888 7103">
                                    +959 45 888 7103
                                </a>
                            </li>

                            <li>
                                <i class="flaticon-user"></i>
                                <span>Fax:</span>
                                <a href="tel:+959 43 43 6666">
                                    +959 43 43 6666
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden p-0">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="map iframe-h-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
