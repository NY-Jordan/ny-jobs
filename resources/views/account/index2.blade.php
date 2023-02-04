@extends('layouts/default')


@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
            <div class="row" style="padding-bottom: 00px;">
                <div class="col-md-9 col-lg-7">
                    <div class="d-flex">
                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="{{ asset(Storage::url(auth()->user()->logo)) }}" alt=""
                                style="width: 200px; height: 200px;">

                        </div>
                        <div style="padding-top: 120px;">
                            <h2 class="" style="margin-bottom:00px;color: white;">
                                <strong>{{ auth()->user()->name }}</strong>
                            </h2>
                            <h3 style="color: white;text-align:center">{{ auth()->user()->email }}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="site-section services-section block__62849" id="next-section">
        <div class="container">
            <div class="row mb-20 text-right d-flex" style="align-items: flex-end;padding-left:100%">
                <button class="btn btn-secondary border-width-2 d-none d-lg-inline-block"> <span
                        class="mr-2 icon-add"></span>Add</button>
            </div>
            <div>
                <h2 style="margin-bottom: 70px"> My Job Offers</h2>
                <div class="row">
                    <div class="col-lg-10 col-md-12">
                        @if (!empty($jobs[0]))
                            @foreach ($jobs as $job)
                                <li class="job-listing  d-block d-sm-flex pb-3 pb-sm-0 align-items-center" style="margin-bottom: 20px;">

                                    <a href="job-single.html"></a>
                                    <div class="job-listing-logo">
                                        <img src="{{ asset(Storage::url($job->company->logo)) }}" alt="Image"
                                            class="img-fluid">
                                    </div>

                                    <div
                                        class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                        <div class="job-listing-position custom-width w-25 mb-3 mb-sm-0">
                                            <h2>{{ $job->title }}</h2>
                                        </div>
                                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                            <span class="icon-room mb-4"></span>{{ $job->location }} <br>
                                            <span class="badge badge-danger mt-sm-10" style="margin-right: 20px;">{{ $job->type }}</span>
                                            <span class="icon-room mb-4"></span>{{ $job->view }} view
                                        </div>
                                        <div class="job-listing-meta">
                                            
                                            <button class="btn btn-link">Actions</button>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else 
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4 " style="color: red">List is empty...</div>
                                <div class="col-4"></div>
                            </div>
                        @endif
                    </div>
                    <div class="col-2" style="padding-left: 150px;">
                        <div>
                            <h6 style="margin-bottom: 00px">Posts</h6>
                            <div style=" font-size: 100px;">{{ count($jobs) }}</div>
                        </div>
                        <div>
                            <h6 style="margin-bottom: 00px">Views</h6>
                            <div style=" font-size: 100px;">00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
