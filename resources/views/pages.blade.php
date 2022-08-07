@extends('layouts/default')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Page Section</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#about"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">About</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#faq"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">FAQ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#service"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Service</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#testimonial"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Testimonial</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#news"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">News</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#event"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Event</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#search"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Search</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#terms"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Terms</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#privacy"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Privacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#team"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#research_training" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Research &
                                Training</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_monotoring" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate
                                Monitoring</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate
                                Change</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#intro_climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Introduction
                                Bulletin</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#intro_bilan"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Introduction
                                Bilan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#data_management" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Data Management
                                Remote Sensing & Geospatial</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#disaster_risk" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Disaster Risk
                                Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#climate_app"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Climate
                                Application</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#sidebar"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Climate
                                Application</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#intro_climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Introduction to
                                Climate Change</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_vulnerability" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Vulnerability and Impacts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_adaptation" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Adaptation Actions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_mitigation" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Mitigation Actions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ghgm"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">GHGM</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Home Start-->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <!-- Meta Items Start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Meta Items</h4>
                                        </div>
                                        <form action="{{ route('update_pages') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="meta_items" value="meta_items">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="mb-3">
                                                            <label for="basicInput" class="form-label">Title</label>
                                                            <input type="text" placeholder="ONACC" name="title" value="{{ $pages->title }}"
                                                                class="form-control" id="basicInput">
                                                        </div>
                                                    </div>
    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                                Keyword</label>
                                                            <textarea class="form-control" name="meta_keyword" id="metaKeyword"
                                                                rows="3">{{  $pages->meta_keyword }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                                Description</label>
                                                            <textarea class="form-control" name="meta_description" id="metaDescription"
                                                                rows="3">{{  $pages->meta_description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Meta Items End -->


                                <!-- Welcome Section Start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Welcome Section</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" value="{{  $pages->home_welcome_title }}" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Subtitle</label>
                                                        <input type="text" value="{{  $pages->home_welcome_subtitle }}" placeholder="Subtitle" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <textarea name="about_content" id="about_content" cols="30" rows="5">{{  $pages->home_welcome_text }}</textarea>
                                              

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Video </label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="2">{{  $pages->home_welcome_text }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%;"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            Business Management - 95%
                                                        </div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">Financial Management - 70%</div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 88%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">Project Management - 88%</div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <select class="js-example-basic-single form-select">
                                                            <option></option>
                                                            <option value="show">Show</option>
                                                            <option value="hide">Hide</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Welcome Section End -->

                                <!-- Welcome Section (Video Background) Start -->

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Welcome Section (Video Background)</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div>
                                                    <img src="" alt="VideoBG" class="col-4"
                                                        style="width: 100px; height:100px;">
                                                </div>
                                                <div class="mb-7">
                                                    <form action="" enctype="multipart/form-data" method="post"
                                                        class="col-4 row">
                                                        <!-- action pour la video -->
                                                        @csrf
                                                        <div class="form-group col-6">
                                                            <label class="form-label">Video Background</label>
                                                            <input type="file" name="video_bg" class="form-control"
                                                                id="video_bg">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- Welcome Section (Video Background) End -->



                            </div>
                        </div>
                        <!-- Home End -->

                        <!-- About Start -->
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">About Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Editeur de texte -->

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About End -->

                        <!-- FAQ Start -->
                        <div class="tab-pane fade show active" id="faq" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">FAQ
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ End -->

                        <!-- Service Start -->
                        <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Service
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service End -->

                        <!-- Testimonial Start -->
                        <div class="tab-pane fade show active" id="testimonial" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Testimonial
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials End -->


                        <!-- News Start -->
                        <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">News
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News End -->

                        <!-- Event Start -->
                        <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Event
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event End -->

                        <!-- Contact Start -->
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Contact
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Address</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Email
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Phone
                                                        </label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Map (iframe Code)</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact End -->

                        <!-- Search Start -->
                        <div class="tab-pane fade show active" id="search" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Search
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search End -->

                        <!-- Term Start -->
                        <div class="tab-pane fade show active" id="terms" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Term
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Term End -->

                        <!-- Privacy Start -->
                        <div class="tab-pane fade show active" id="privacy" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Privacy
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Editeur de Texte -->

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Privacy End -->

                        <!-- Team Start -->
                        <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Team
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team End -->

                        <!-- Research and training Start -->
                        <div class="tab-pane fade show active" id="research_training" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Portfolio
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Research and training End -->

                        <!-- Climate Monotoring Start -->
                        <div class="tab-pane fade show active" id="climate_monotoring" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Climate Monitoring
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Climate Monotoring End -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection