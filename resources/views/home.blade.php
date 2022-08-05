@extends('layouts/default')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Category</p>
                            <h3 class="text-white">{{ $total_category }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Clients</p>
                            <h3 class="text-white">{{ $total_client }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total News</p>
                            <h3 class="text-white">{{ $total_news }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Careers</p>
                            <h3 class="text-white">{{ $total_events }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Team Members</p>
                            <h3 class="text-white">{{ $total_team_member }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Services</p>
                            <h3 class="text-white">{{$total_services }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Testimonials</p>
                            <h3 class="text-white">{{ $total_testimonials }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total PHOTOS (GALLERY)</p>
                            <h3 class="text-white">{{ $total_photo }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="me-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Pricings Tables</p>
                            <h3 class="text-white">{{ $total_princing }}</h3>
                            <div class="progress mb-2 bg-white">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection
