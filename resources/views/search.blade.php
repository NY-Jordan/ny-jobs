@extends('layouts/default')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image"
        style="background-image: url('{{ asset('dist/images/hero_1.jpg') }}');" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                      
                    </div>
                    @include('components/search1')
                </div>
            </div>
        </div>

        <a href="#next" class="scroll-button smoothscroll">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>

    </section>

    


   
        <section class="site-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                      <h2 class="section-title mb-2">{{ count($results) }} Job Listed</h2>
                    </div>
                  </div>
                  
                @if (!empty($results[0]))
                <ul class="job-listings mb-5">

                    @foreach ($results as $result)
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="{{ route('jobDetails', $result->id) }}"></a>
                            <div class="job-listing-logo">
                                <img src="{{ asset(Storage::url($result->company->logo)) }}"
                                    alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>

                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                    <h2>{{ $result->title }}</h2>
                                    <strong>{{ $result->company->name }}</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="icon-room"></span> {{ $result->location }}
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-danger">{{ $result->type }}</span>
                                </div>
                            </div>

                        </li>
                    @endforeach


                </ul>
                {{ $results->links() }}
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
                @endif

            </div>
        </section>
  


@endsection
