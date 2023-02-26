@extends('layouts/default')

@section('content')
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">{{ $job->title }}</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <a href="#">Job</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>{{ $job->title }}</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      
      <section class="site-section">
        <div class="container">
          @include('components/alertSuccessMessage')
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                  <img src=" {{ asset(Storage::url($job->company->logo ))}}" alt="Image">
                </div>
                <div>
                  <h2>{{ $job->title }}</h2>
                  <div>
                    <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{ $job->company->name }}</span>
                    <span class="m-2"><span class="icon-room mr-2"></span>{{ $job->location }}</span>
                    <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{ $job->type }}</span></span>
                  </div>
                </div>
              </div>
            </div>
            @if ($job->apply_by === "email_to_apply")
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                  </div>
                </div>
              </div>
            @endif
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-5">
                <figure class="mb-5"><img  src="{{ asset(Storage::url($job->image ))}}" alt="Image" class="img-fluid rounded"></figure>
                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                <?=  $job->description  ?>
              </div>
             
              @if ($job->apply_by === "email_to_apply")
                <div class="row mb-5">
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                  </div>
                </div>                  
              @else
                  <h4>Apply this job  to  <a href="{{ $job->to_apply }}">{{ $job->to_apply }}</a></h4>
              @endif
  
             
  
            </div>
            <div class="col-lg-4">
              <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                <ul class="list-unstyled pl-3 mb-0">
                  <li class="mb-2"><strong class="text-black">Published on:</strong> {{ $job->created_at->format('M d, Y') }}</li>
                  <li class="mb-2"><strong class="text-black">Employment Status:</strong>  {{ $job->type}}</li>
                  <li class="mb-2"><strong class="text-black">Experience:</strong> {{ $job->experience}} year(s)</li>
                  <li class="mb-2"><strong class="text-black">Job Location:</strong> {{ $job->location}}</li>
                  <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{ $job->expired_at  }}</li>
                </ul>
              </div>
  
              <div class="bg-light p-3 border rounded">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                <div class="px-3">
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </section>
  
      <section class="site-section" id="next">
        <div class="container">
  
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2">{{ $count }} Related Jobs</h2>
            </div>
          </div>
          
          <ul class="job-listings mb-5">
            @foreach ($jobs as $job)
              <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="{{ route('jobDetails', $job->id) }}"></a>
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
                <span></span>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <a href="#" class="next">View more</a>
            </div>
        </div>
  
        </div>
      </section>
      
@endsection