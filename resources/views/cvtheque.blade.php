@extends('layouts/default')

@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="text-white font-weight-bold">CV Theque</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>CV Theque</strong></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <form method="post" class="search-jobs-form">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="Job title, Company...">
                            </div>
                            
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%"
                                    data-live-search="true" title="Select Job Type">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span
                                        class="icon-search icon mr-2"></span>Search Job</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                
            </div>

            
        </div>
    </section>

    <section class="site-section services-section bg-light block__62849" id="next-section">

        <div class="container">
            

            <div class="row">
                @if (!empty($curriculum))
                    @foreach ($curriculum as $cv)
                        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-5">

                            <a href="service-single.html" class="block__16443 text-center d-block" style="padding: 10px;">
                                <div>
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="" srcset=""
                                        style="width: 100px;height: 100px; border-radius: 60px;">
                                </div>
                                <h3>{{ $cv->name }}</h3>
                                <div>
                                    <ul style="list-style: none ; padding-left: 00px;">
                                        <li class="d-flex">
                                            <p>Profession</p> : {{ $cv->profession->name }}
                                        </li>
                                        <li class="d-flex" style="margin-left: 20px;">
                                            <p>Experience</p> : {{ $cv->experience }} year(s)
                                        </li>

                                    </ul>


                                </div>

                            </a>

                        </div>
                    @endforeach
                @endif

            </div>


        </div>
    </section>
@endsection
