@extends('layouts/default')

@section('content')
<section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('{{ asset('dist/images/hero_1.jpg') }}');" id="home-section">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="mb-5 text-center">
            <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quas fugit ex!</p>
          </div>
          @include('components/search1')
        </div>
      </div>
    </div>

    <a href="#next" class="scroll-button smoothscroll">
      <span class=" icon-keyboard_arrow_down"></span>
    </a>
  </section>

  
  <section class="site-section" id="next">
    <div class="container">
      @include('components/alertSuccessMessage')
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{ count($jobs) }} Job Listed</h2>
        </div>
      </div>
      
      <ul class="job-listings mb-5">

        @foreach ($jobs as $job)
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="job-single.html"></a>
                <div class="job-listing-logo">
                <img src="{{ asset(Storage::url($job->company->logo)) }}" alt="Image" class="img-fluid">
                </div>
    
                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2>{{ $job->title }}</h2>
                    <strong>{{ $job->company->name }}</strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span> {{ $job->location }}
                </div>
                <div class="job-listing-meta">
                    <span class="badge badge-danger">{{ $job->type }}</span>
                </div>
                </div>
                
            </li>
        @endforeach
        
        

        

        
      </ul>

      <div class="row pagination-wrap">
        <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
          <span>Showing 1-7 Of 43,167 Jobs</span>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <div class="custom-pagination ml-auto">
            <a href="#" class="prev">Prev</a>
            <div class="d-inline-block">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            </div>
            <a href="#" class="next">Next</a>
          </div>
        </div>
      </div>

    </div>
  </section>

    <section class="py-5 bg-image overlay-primary fixed overlay"
        style="background-image: url('{{ asset('dist/images/hero_1.jpg') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="text-white">Looking For A Job?</h2>
                    <p class="mb-0 text-white lead">Save your cv and apply for many jobs in the platform.</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <a href="#" class="btn btn-warning btn-block btn-lg" data-toggle="modal"
                        data-target="#save_cv">Save your CV</a>
                </div>
            </div>
        </div>
    </section> 
@endsection

 @include('components/modalcv')