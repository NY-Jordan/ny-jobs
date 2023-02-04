
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="{{ asset('dist/css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/fonts/line-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/quill.snow.css') }}">
    
    <!-- MAIN CSS -->

    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">  
    @yield('header')  
      
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    @include('layouts/navigation')
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-success mt-2" > <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>{{ $error }}</div>
            @endforeach
        @endif
        @if (session('message'))
            <div class="alert alert-success dt-success-msg f12" > <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> {{ session('message') }}</div>
        @endif
    @yield('content')
    <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>
  
        <div class="container">
          <div class="row mb-5">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Search Trending</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Web Developers</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">CSS3</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Company</h3>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">Support</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Contact Us</h3>
              <div class="footer-social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
  
          <div class="row text-center">
            <div class="col-12">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
            </div>
          </div>
        </div>
      </footer>
    
    </div>
    @if (auth()->check())
        
    
    <div class="modal fade" id="deleteaccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete your account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('deleteAccount', auth()->id()) }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body container">
                    <h4 class="text-center">Are you sure tou want to delete your account ?</h4>
                    <div class="form-group row" style="margin-left: 20% ; margin-right: 20%">
                        <div class="col-4">
                            <button class="btn btn-primary" type="submit">yes</button>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="btn btn-primary">No, cancel</button>
                        </div>
                    </div>
                    

                </div>
                
            </form>
        </div>
    </div>
</div>
@endif
  
      <!-- SCRIPTS -->
      
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      

      <script src="{{ asset('dist/js/jquery.min.js') }}"></script>

      <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('dist/js/stickyfill.min.js') }}"></script>
      <script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
      <script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
      
      <script src="{{ asset('dist/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('dist/js/jquery.animateNumber.min.js') }}"></script>
      <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('dist/js/quill.min.js') }}"></script>
      <script src="{{ asset('dist/js/bootstrap-select.min.js') }}"></script>
      
      <script src="{{ asset('dist/js/custom.js') }}"></script>
      <script src="{{ asset('dist/js/login.js') }}"></script>
      @yield('script')
  
       
    </body>
  </html>


    