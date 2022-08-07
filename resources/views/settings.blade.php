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
                                            <h4>Logo</h4>
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <img src="{{ Storage::url($settings->logo) }}" class="col-4"
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
                                                <img src="{{ Storage::url($settings->favicon) }}" class="col-4"
                                                    style="width: 100px; height:100px;" alt="" srcset="">

                                                <form action="{{ route('logo.update') }}" enctype="multipart/form-data"
                                                    method="post" class="col-4 row">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <input type="file" name="favicon" class="form-control"
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
                                            <h4>Top Bar</h4>
                                            <div style="margin-top: 10px;">
                                                <form action="{{ route('logo.update') }}" enctype="multipart/form-data"
                                                    method="post" class="col-4 row">
                                                    @csrf
                                                    <input type="hidden" value="top_bar" name="top_bar">
                                                    <div class="form-group">
                                                        <label for="top_bar_emai"> Top Bar Eamil</label>
                                                        <input type="text" name="top_bar_email" value="{{ $settings->top_bar_email }}" id="top_bar_email" class="form-control"
                                                            id="logo">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="top_bar_emai"> Top Bar phone</label>
                                                        <input type="text" name="top_bar_phone"  value="{{ $settings->top_bar_phone }}"  id="top_bar_email" class="form-control"
                                                            id="logo">
                                                    </div>
                                                    <div style="margin-top: 10px;">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </form>
                                                <div class="col-2"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               

                            </div>

                            <div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-md-12">
                                    <form action="{{ route('logo.update') }}" method="post">
                                        @csrf
                                        <div class="card" style="padding: 10px;">
                                            <div class="card-header">
                                                <h4>General Section</h4>
                                            </div>
                                            <input type="hidden"  value="true" name="general_section">
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 1 Title</label>
                                                <input type="text" value="{{ $settings->footer_col1_title }}" name="footer_col1_title"
                                                    class="form-control" id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 2 Title</label>
                                                <input type="text" value="{{ $settings->footer_col2_title }}"
                                                    class="form-control" id="basicInput" name="footer_col2_title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 3 Title</label>
                                                <input type="text" value="{{ $settings->footer_col3_title }}"
                                                    class="form-control" id="basicInput" name="footer_col3_title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Column 4 Title</label>
                                                <input type="text" value="{{ $settings->footer_col4_title }}"
                                                    class="form-control" id="basicInput" name="footer_col4_title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Footer-Copyright</label>
                                                <input type="text" value="{{ $settings->footer_copyright }}"
                                                    class="form-control" id="basicInput" name="footer_copyright">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Footer-Address</label>
                                                    <textarea class="form-control" name="footer_address" id="exampleFormControlTextarea1" rows="3">{{ $settings->footer_address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Footer
                                                        Email</label>
                                                    <textarea class="form-control" name="footer_email" id="exampleFormControlTextarea1" rows="3">{{ $settings->footer_email }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Footer
                                                        Phone</label>
                                                    <textarea class="form-control" name="footer_phone" id="exampleFormControlTextarea1" rows="3">  {{ $settings->footer_phone }}</textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Number of Recent
                                                    Portifolios</label>
                                                <input type="text" placeholder="Input Here"
                                                    value="{{ $settings->footer_recent_portfolio_item }}" name="footer_portfolio_item" class="form-control"
                                                    id="basicInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicInput" class="form-label">Number of recent News</label>
                                                <input type="text" placeholder="Input Here" name="footer_recent_news_item"
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
                                                <input type="hidden"  value="newsletter" name="newsletter">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Newsletter Text</label>
                                                        <textarea class="form-control" name="newsletter_text" id="exampleFormControlTextarea1" rows="3">  {{ $settings->newsletter_text }}</textarea>
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
                                            <form action="{{ route('logo.update') }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="cta" name="cta">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">CTA Text</label>
                                                        <textarea class="form-control" name="cta_text" id="exampleFormControlTextarea1" rows="3">  {{ $settings->cta_text }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">CTA Button Text</label>
                                                        <input type="text" class="form-control" name="cta_button_text" value="{{ $settings->cta_button_text }}" id="exampleFormControlTextarea1">                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">CTA Button URL</label>
                                                        <input type="text" class="form-control" value="{{ $settings->cta_button_url }}" name="cta_button_url" id="exampleFormControlTextarea1">                                                    </div>
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
                                            <h4>Call To Action Background Photo
                                            </h4>
                                        </div>
                                        <div>
                                            <img src="{{ Storage::url($settings->cta_background) }}" alt="" srcset="">
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update')  }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="cta_background_hidden" name="cta_background">
                                                <div class="col-md-6" style="margin-bottom: 10px;">
                                                    <input type="file" name="cta_background" id="">
                                                </div>
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Email
                                            </h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update')  }}" method="post">
                                                @csrf
                                                <input type="hidden" value="email" name="email">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Send Email From *</label>
                                                    <input type="text" name="send_email_from" value="{{ $settings->send_email_from }}"
                                                        class="form-control" id="basicInput">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Recieve Email To *</label>
                                                    <input type="text" name="receive_email_to" value="{{ $settings->receive_email_to }}"
                                                        class="form-control" id="basicInput">
                                                </div>
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade row" id="banner" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <img src="../assets/images/img-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3>Banner About</h3>
                                            <div>
                                                <form action="" method="POST">
                                                    <input type="file" name="" id="">
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="sidebar" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>News Page - Sidebar Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update') }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="news_page_sidebar" name="news_page_sidebar">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_total_recent_post" class="form-label">Total Recent Posts *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_total_recent_post }}" name="sidebar_total_recent_post">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_category" class="form-label">Heading - Category *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_news_heading_category }}" name="sidebar_news_heading_category">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_recent_post" class="form-label">Heading - Recent Post *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_news_heading_recent_post }}" name="sidebar_news_heading_recent_post">                                                    
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
                                            <h4>Event Page - Sidebar Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update') }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="event_page_sidebar" name="event_page_sidebar">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_total_recent_post" class="form-label">Total Upcoming Events *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_total_upcoming_event }}" name="sidebar_total_upcoming_event">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_category" class="form-label">Total Past Events *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_total_past_event }}" name="sidebar_total_past_event">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_recent_post" class="form-label">Total Past Events *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_event_heading_upcoming }}" name="sidebar_event_heading_upcoming">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_recent_post" class="form-label">Heading - Past Event *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_event_heading_past }}" name="sidebar_event_heading_past">                                                    
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
                                            <h4>Service Single Page - Sidebar Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update') }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="service_single_page_sidebar" name="service_single_page_sidebar">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_total_recent_post" class="form-label">Heading - Our Services *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_service_heading_service }}" name="sidebar_service_heading_service">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_category" class="form-label">Heading - Quick Contact *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_service_heading_quick_contact	 }}" name="sidebar_service_heading_quick_contact">                                                    
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
                                            <h4>Portfolio Single Page - Sidebar Section</h4>
                                        </div>
                                        <div style="padding: 10px">
                                            <form action="{{ route('logo.update') }}" method="post">
                                                @csrf
                                                <input type="hidden"  value="portfolio_single_page_sidebar" name="portfolio_single_page_sidebar">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_total_recent_post" class="form-label">Heading - Project Detail *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_portfolio_heading_project_detail }}" name="sidebar_portfolio_heading_project_detail">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sidebar_news_heading_category" class="form-label">Heading - Quick Contact *</label>
                                                        <input type="text" class="form-control" value="{{ $settings->sidebar_portfolio_heading_quick_contact	 }}" name="sidebar_portfolio_heading_quick_contact">                                                    
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" style="font-size: 20px; border-radius:5px;"
                                                class="bn btn-primary">Update</button>                                       
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
