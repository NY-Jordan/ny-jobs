@extends('layouts/default')


@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});height: 300px;" id="home-section">
        <div class="container">
            <div class="row" style="padding-bottom: 00px;">
                <div class="col-md-4">
                    <h1 class="text-white font-weight-bold">Update Password</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('account') }}">Account</a> <span class="mx-2 slash">/</span>
                        <a href="{{ route('settings') }}">Settings</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Update Password</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section services-section block__62849" id="next-section">
        <div class="container">
            @include('components/alertSuccessMessage')
            <div class="row mb-20 text-right d-flex" style="align-items: flex-end;padding-left:100%">
                <button class="btn btn-secondary border-width-2 d-none d-lg-inline-block"> <span
                        class="mr-2 icon-add"></span>Add</button>
            </div>
            <div>
                <div class="row">
                    @include('components/sidemenu')
                    <div class="col-lg-9 col-md-12">
                        <div>
                            <h2>Update Password</h2>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('updatePassword', auth()->user()->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="company-website">Old password</label>
                                    <input type="password" class="form-control" name="old_password">
                                </div>

                                <div class="form-group">
                                    <label for="company-website-fb">New password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>

                                <div class="form-group">
                                    <label for="company-website-tw">Confirm password</label>
                                    <input type="password" class="form-control" name="confirm_password" >
                                </div>
                               
                                <div class="row align-items-center mb-5">
                                    <div class="col-lg-4 ml-auto">
                                        <div class="row">
                                            <div class="col-6">
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-block btn-primary btn-md">Update</button>
                                            </div>
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
        </div>
        </div>
    </section>
@endsection
