@extends('layouts/default')


@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});height: 300px;" id="home-section">
        <div class="container">
            <div class="row" style="padding-bottom: 00px;">
                <div class="col-md-4">
                    <h1 class="text-white font-weight-bold">Settings</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('account') }}">Account</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Settings</strong></span>
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

                <div class="row">
                    @include('components/sidemenu')
                    <div class="col-lg-9 col-md-12">
                        <div>
                            <h2>Profile</h2>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('updateProfil', auth()->user()->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row">
                                    <div class="form-group  col-6">
                                        <label for="email">Company Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ auth()->user()->name }}" placeholder="Company Name">
                                    </div>
                                    <div class="form-group  col-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ auth()->user()->email }}" placeholder="you@yourdomain.com">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="job-description">Company Description (Optional)</label>
                                    <div class="editor" id="editor-2" name="description">
                                        <p>Description</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="company-website">Website (Optional)</label>
                                    <input type="text" class="form-control" name="website" value="{{ auth()->user()->website }}"
                                        id="company-website" placeholder="https://">
                                </div>

                                <div class="form-group">
                                    <label for="company-website-fb">Facebook Username (Optional)</label>
                                    <input type="text" class="form-control" name="facebook"
                                        value="{{ auth()->user()->facebook }}" id="company-website-fb" placeholder="companyname">
                                </div>

                                <div class="form-group">
                                    <label for="company-website-tw">Twitter Username (Optional)</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ auth()->user()->twitter }}"
                                        id="company-website-tw" placeholder="@companyname">
                                </div>
                                <div class="form-group">
                                    <label for="company-website-tw">Linkedin Username (Optional)</label>
                                    <input type="text" class="form-control" name="linkedin"
                                        value="{{ auth()->user()->linkedin }}" id="company-website-tw" placeholder="companyname">
                                </div>

                                <div class="form-group">
                                    <label for="company-website-tw d-block">Upload Logo</label> <br>
                                    <label class="btn btn-primary btn-md btn-file">
                                        Browse File<input type="file" name="logo" hidden>
                                    </label>
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
