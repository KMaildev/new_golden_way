@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground"
        data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="title">Our Activities</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <p>
                                We've Done Lots Of Work, Let’s Check Some Activities Here.
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

    <section>
        <div class="container">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                        <div class="heading-line-bottom">
                            @if (session('key') == 'jp')
                                <h4 class="heading-title">
                                    {{ $activitie->title_jp ?? '' }}
                                </h4>
                                <p>
                                    {{ $activitie->description_jp ?? '' }}
                                </p>
                            @else
                                <h4 class="heading-title">
                                    {{ $activitie->title ?? '' }}
                                </h4>
                                <p>
                                    {{ $activitie->description ?? '' }}
                                </p>
                            @endif
                        </div>
                    </div>
                    @php
                        $values = explode(',', $activitie->photo);
                    @endphp
                    @foreach ($values as $photo)
                        <div class="col-lg-3 col-md-12 col-sm-12 p-2"
                            style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                            <div class="post">
                                <div class="post-image">
                                    <img class="img-fluid" src="{{ $photo }}" alt="New Golden Way Agency"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr><br>
                @endforeach
            </div>
        </div>
    </section>
@endsection
