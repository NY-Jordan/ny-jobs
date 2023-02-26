@extends('layouts/default')

@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h1 class="text-white font-weight-bold">Register</h1>
                  <div class="custom-breadcrumbs">
                      <a href="#">Home</a> <span class="mx-2 slash">/</span>
                      <span class="text-white"><strong>Register</strong></span>
                  </div>
              </div>
          </div>          
      </div>
    </section>
    <section class="site-section services-section bg-light block__62849" id="next-section">
        <div class="container">
            @include('components/alertSuccessMessage')
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" method="POST" action="{{ route('register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-black mb-5 border-bottom pb-2">register</h3>


                        <div class="row">
                            <div class="form-group  col-6">
                                <label for="email">Company Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Company Name">
                            </div>
                            <div class="form-group  col-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="you@yourdomain.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="job-title">password</label>
                                <input type="password" class="form-control" name="password" id="job-title"
                                    value="{{ __('Password') }}" placeholder="Product Designer">
                            </div>
                            <div class="form-group col-6">
                                <label for="job-location">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    value="{{ __('Confirm Password') }}" id="job-location" placeholder="e.g. New York">
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
                            <input type="text" class="form-control" name="website" value="{{ old('website') }}"
                                id="company-website" placeholder="https://">
                        </div>

                        <div class="form-group">
                            <label for="company-website-fb">Facebook Username (Optional)</label>
                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}"
                                id="company-website-fb" placeholder="companyname">
                        </div>

                        <div class="form-group">
                            <label for="company-website-tw">Twitter Username (Optional)</label>
                            <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}"
                                id="company-website-tw" placeholder="@companyname">
                        </div>
                        <div class="form-group">
                            <label for="company-website-tw">Linkedin Username (Optional)</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}"
                                id="company-website-tw" placeholder="companyname">
                        </div>

                        <div class="form-group">
                            <label for="company-website-tw d-block">Upload Logo</label> <br>
                            <label class="btn btn-primary btn-md btn-file">
                                Browse File<input type="file" name="logo" hidden>
                            </label>
                        </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">

                <div class="col-lg-4 ml-auto">
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-block btn-primary btn-md">Save Job</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
