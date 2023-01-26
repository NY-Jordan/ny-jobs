@extends('layouts/default')

@section('header')
    <link rel="stylesheet" href="{{ asset('dist/css/style2.css') }}">
@endsection
@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="text-white font-weight-bold">Account</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Account</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section services-section bg-light block__62849" id="next-section">
        <div class="container">
            <div class="row mb-20 text-right">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">
                    <button class="btn btn-secondary border-width-2 d-none d-lg-inline-block"> <span class="mr-2 icon-add"></span>Post a Job</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="border p-2 d-inline-block mr-3 rounded" style="width: 100%;">
                        <img src="{{ asset(Storage::url(auth()->user()->logo)) }}"  alt="">
                    </div>
                    <div class="gradient-wrapper sidebar-item-box">
                        <ul class="nav tab-nav my-account-title">
                            <li class="nav-item">
                                <a class="active" href="#joboffers" aria-expanded="false" data-toggle="tab"> <span class="icon-keyboard_arrow_left"></span>(4) Jobs Offers</a>

                            </li>
                            <li class="nav-item">
                                <a href="#personal" aria-expanded="false" data-toggle="tab">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a href="#personal" aria-expanded="false" data-toggle="tab">Package & Subscriptions</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">
                        <div role="tabpanel" class="gradient-padding active tab-pane" id="joboffers">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="title-section"> (4)  Jobs offers</h2>
                                </div>
                                <div class="col-8">
                                    <div class="layout-switcher float-none-mb text-center-mb mb10--mb">
                                        <ul>
                                            <li>
                                                <div class="page-controls-sorting">
                                                    <button class=" btn btn-primary dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-expanded="false">Trier par<i
                                                            class="fa fa-sort" aria-hidden="true"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="?q=created_at">Date</a>
                                                        <a class="dropdown-item" href="?q=price">Meilleur
                                                            Prix</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active"><a href="#" data-type="category-list-layout3"
                                                    class="product-view-trigger"><i class="fa fa-th-large"></i></a></li>
                                            <li><a href="#" data-type="category-grid-layout3"
                                                    class="product-view-trigger"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <div class="div">
                                    <li class="job-listing d-block d-sm-flex pb-3  align-items-center" style="margin-bottom: 20px; border-bottom: 1px solid #eee;">
                                        <a href="">
                                            <a href="job-single.html"></a>
                                            {{-- <div class="job-listing-logo">
                                                <img src="{{ asset('dist/images/job_logo_1.jpg') }}"
                                                    alt="Free Website Template by Free-Template.co" class="img-fluid">
                                            </div> --}}

                                            <div class="job-listing-about d-flex custom-width w-100 justify-content-between mx-4">
                                                <div class="job-listing-position custom-width w-20 mb-3 mb-sm-0">
                                                    <h3 style="margin-bottom : 5px;">Product Designer</h3>
                                                    <i>Le 15 Nov 2022</i>
                                                    <div class="job-listing-meta">
                                                        <span class="badge badge-danger">Part Time</span>
                                                    </div>
                                                </div>
                                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                                    <span class="icon-room"></span> New York, New York
                                                </div>
                                                <div>
                                                   <button class="btn btn-warning">Actions</button>
                                                </div>
                                               
                                            </div>
                                        </a>

                                    </li>
                                    <li class="job-listing d-block d-sm-flex pb-3  align-items-center" style="margin-bottom: 20px; border-bottom: 1px solid #eee;">
                                        <a href="">
                                            <a href="job-single.html"></a>
                                            {{-- <div class="job-listing-logo">
                                                <img src="{{ asset('dist/images/job_logo_1.jpg') }}"
                                                    alt="Free Website Template by Free-Template.co" class="img-fluid">
                                            </div> --}}

                                            <div class="job-listing-about d-flex custom-width w-100 justify-content-between mx-4">
                                                <div class="job-listing-position custom-width w-20 mb-3 mb-sm-0">
                                                    <h3 style="margin-bottom : 5px;">Product Designer</h3>
                                                    <i>Le 15 Nov 2022</i>
                                                    <div class="job-listing-meta">
                                                        <span class="badge badge-danger">Part Time</span>
                                                    </div>
                                                </div>
                                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                                    <span class="icon-room"></span> New York, New York
                                                </div>
                                                <div>
                                                   <button class="btn btn-link">Actions</button>
                                                </div>
                                               
                                            </div>
                                        </a>

                                    </li>
                                    <li class="job-listing d-block d-sm-flex pb-3  align-items-center" style="margin-bottom: 20px; border-bottom: 1px solid #eee;">
                                        <a href="">
                                            <a href="job-single.html"></a>
                                            {{-- <div class="job-listing-logo">
                                                <img src="{{ asset('dist/images/job_logo_1.jpg') }}"
                                                    alt="Free Website Template by Free-Template.co" class="img-fluid">
                                            </div> --}}

                                            <div class="job-listing-about d-flex custom-width w-100 justify-content-between mx-4">
                                                <div class="job-listing-position custom-width w-20 mb-3 mb-sm-0">
                                                    <h3 style="margin-bottom : 5px;">Product Designer</h3>
                                                    <i>Le 15 Nov 2022</i>
                                                    <div class="job-listing-meta">
                                                        <span class="badge badge-danger">Part Time</span>
                                                    </div>
                                                </div>
                                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                                    <span class="icon-room"></span> New York, New York
                                                </div>
                                                <div>
                                                   <button class="btn btn-link">Actions</button>
                                                </div>
                                               
                                            </div>
                                        </a>

                                    </li>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="gradient-padding  tab-pane fade" id="personal">
                            <h2 class="title-section">Informations Personnelle</h2>
                            <form id="login-page-form" method="POST" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Email</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="first-name2" name="email" value=""
                                                class="form-control" placeholder="Enter your e-mail here . . .">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Nom</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="first-name" name="Fisrt_name" value=""
                                                class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Pre-Nom</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="last-name" name="Last_name" value=""
                                                class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Telephone</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="Phone" value=""
                                                class="form-control" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Mot de passe actuelle</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="password" id="c-password" name="Current_Password"
                                                class="form-control" placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Nouveau Mot de passe</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="password" id="n-password" name="New_Password"
                                                class="form-control" placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">confirmer le mot de passe</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="password" name="Confirm_Password" id="r-password"
                                                class="form-control" placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-lg-9 col-md-8 col-sm-8 col-12 ml-none--mb">
                                        <div class="form-group">
                                            <button type="submit" class="cp-default-btn-sm">Modifier</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
