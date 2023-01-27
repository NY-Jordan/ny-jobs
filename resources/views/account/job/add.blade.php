@extends('layouts/default')

@section('script')
    <script src="{{ asset('dist/js/addjob.js') }}"></script>
@endsection
@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="text-white font-weight-bold">New Job</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('account') }}">Account</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Add new job</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Post A Job</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md"><span
                                    class="icon-open_in_new mr-2"></span>Preview</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
                        </div>
                    </div>
                </div>
            </div>
            <form class="p-4 p-md-5 border rounded" action="{{ route('createJob') }}" method="post">
                @csrf
                <div class="row mb-5" >
                    <div class="col-lg-12">
                        <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
                        <div class="form-group">
                            <label for="company-website-tw d-block">Upload Featured Image*</label> <br>
                            <label class="btn btn-primary btn-md btn-file">
                                Browse File<input type="file" name="image" hidden>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="job-title">Job Title*</label>
                            <input type="text" name="title" class="form-control" id="job-title" placeholder="Product Designer">
                        </div>
                        <div class="form-group">
                            <label for="job-type">Job Type*</label>
                            <select class="selectpicker border rounded" name="type" id="job-type" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Job Type">
                                <option>Part Time</option>
                                <option>Full Time</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job-location">Location*</label>
                            <input type="text" class="form-control" name="location" id="job-location" placeholder="e.g. New York">
                        </div>
                        <div class="form-group">
                            <label for="job-region">Apply by*</label>
                            <select class="selectpicker border rounded" name="apply_by" id="apply-job" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Region">
                                <option value="email_to_apply">Email</option>
                                <option value="link_to_apply">to a link</option>
                            </select>
                        </div>
                        <div class="form-group text-center" id="to_apply"></div>
                        <div class="form-group">
                            <label for="job-description">Job Description*</label>
                            <div class="editor"  id="editor-1">
                                <p>Write Job Description!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-lg-4 ml-auto">
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-light btn-md"><span
                                        class="icon-open_in_new mr-2"></span>Preview</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-primary btn-md">Save Job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection
