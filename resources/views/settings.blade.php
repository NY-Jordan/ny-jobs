@extends('layouts/default')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Settings</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#details" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Details</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#footer"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Footer</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#email"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Email</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#banner"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Banner</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#sidebar"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Sidebar</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="details" role="tabpanel"
                                aria-labelledby="home-tab">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>LOGO</h4>
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <img src="{{ Storage::url('images/logo.png') }}" class="col-4"
                                                    style="width: 100px; height:100px;" alt="" srcset="">

                                                <form action="{{ route('logo.update') }}" enctype="multipart/form-data"
                                                    method="post" class="col-4 row">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <input type="file" name="logo" class="form-control"
                                                            id="logo">
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </form>
                                                <div class="col-2"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Favicon</h4>
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <img src="{{ Storage::url('images/favicon.png') }}" class="col-4"
                                                    style="width: 100px; height:100px;" alt="" srcset="">

                                                <form action="{{ route('logo.update') }}" enctype="multipart/form-data"
                                                    method="post" class="col-4 row">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <input type="file" name="logo" class="form-control"
                                                            id="logo">
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </form>
                                                <div class="col-2"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Color</h4>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-md-12">
                                    <form action="" method="post">
                                        <div class="card" style="padding: 10px;">
                                            <div class="card-header">
                                                <h4>General Section</h4>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 1 Title</label>
                                                <input type="text" value="{{ $settings->footer_col1_title }}"
                                                    class="form-control" id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 2 Title</label>
                                                <input type="text" value="{{ $settings->footer_col2_title }}"
                                                    class="form-control" id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 3 Title</label>
                                                <input type="text" value="{{ $settings->footer_col3_title }}"
                                                    class="form-control" id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 4 Title</label>
                                                <input type="text" value="{{ $settings->footer_col4_title }}"
                                                    class="form-control" id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Footer-Copyright</label>
                                                <input type="text" value="{{ $settings->footer_copyright }}"
                                                    class="form-control" id="basicInput">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Footer-Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $settings->footer_address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Footer
                                                        Email</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $settings->footer_email }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Footer
                                                        Phone</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">  {{ $settings->footer_phone }}</textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Number of Recent
                                                    Portifolios</label>
                                                <input type="text" placeholder="Input Here"
                                                    value="{{ $settings->footer_portfolio_item }}" class="form-control"
                                                    id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Number of recent News</label>
                                                <input type="text" placeholder="Input Here"
                                                    value="{{ $settings->footer_recent_news_item }}" class="form-control"
                                                    id="basicInput">
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                        class="bn btn-primary">Update</button>

                                                </div>
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Newsletter Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="" method="post">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Newsletter Text</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">  {{ $settings->newsletter_text }}</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Call To Action Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="" method="post">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Newsletter Text</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">  {{ $settings->newsletter_text }}</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Call To Action Background Photo</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="" method="post">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Newsletter Text</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">  {{ $settings->newsletter_text }}</textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="contact-tab">
                                Lorem ipsum dolor sit 0amet.</div>
                            <div class="tab-pane fade" id="banner" role="tabpanel" aria-labelledby="contact-tab">
                                Lorem ipsum dolor sit amet.</div>
                            <div class="tab-pane fade" id="sidebar" role="tabpanel" aria-labelledby="contact-tab">
                                Lorem ipsum dolor sit amet.</div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
