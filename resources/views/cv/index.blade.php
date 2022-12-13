@extends('layouts.app')
@section('content')
    <div class="page-content py-5">
        <section class="contact-1">
            <div class="container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-main">
                            <hr>
                            <div class="title">
                                <h2>
                                    APPLY YOUR CV
                                </h2>
                                <p>
                                    Fill your informations and upload your CV.
                                </p>
                            </div>
                            @include('layouts.alert')
                            <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                enctype="multipart/form-data" id="create-form">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label>Name*</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label>Additional Note</label>
                                            <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label for="img">Select your CV to upload</label> <br>
                                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                                class="form-control-file" />
                                            @error('attachment_file')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-theme btn-radius">
                                            <span>Apply Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
