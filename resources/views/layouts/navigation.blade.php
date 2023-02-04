<header class="site-navbar mt-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="site-logo col-6"><a href="index.html">CTO</a></div>

        <nav class="mx-auto site-navigation">
          <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
            <li><a href="{{ route('jobs') }}">Jobs</a></li>
            <li><a href="{{ route('offers') }}">Offers</a></li>
            <li><a href="{{ route('offers') }}">Services</a></li>
            @if (auth()->check())
            <li class="has-children">
              <a href="#">Account</a>
              <ul class="dropdown">
                <li><a href="{{ route('account') }}">Dashboard</a></li>
                @if (auth()->user()->curriculumSubscription)
                  <li><a href="{{ route('cvTheque') }}">CV Theque</a></li>
                @endif
                <li><a href="{{ route('settings') }}">Settings</a></li>
              </ul>
            </li>
            @endif
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li class="d-lg-none"><a href="{{ route('addJob') }}"><span class="mr-2">+</span> Post a Job</a></li>
            <li class="d-lg-none"><a href="#" data-toggle="modal" data-target="#login_modal">Log In</a></li>
          </ul>
        </nav>
        
        <div class="right-cta-menu text-right d-flex aligin-items-center col-6">

          <div class="ml-auto d-flex">
            <a href="{{ route('addJob') }}" style="margin-right: 10px; height: 40px;" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
            @if (auth()->check())
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</button>
              </form>
            @else 
              <a href="#" data-toggle="modal" data-target="#login_modal" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            @endif
          </div>
          <a href="#"  class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>

      </div>
    </div>
  </header>
  <div class="modal fade" id="login_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" style="padding-left: 30px;padding-right: 30px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
            </div>
                <div class="modal-body">
                  <div class="col-lg-12">
                    <div id="error_login"></div>
                    <form action="#" id="login_form" class="" method="post">
                      @csrf
                      <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Email</label>
                          <input type="email" id="" name="email" class="form-control" placeholder="Email address">
                        </div>
                      </div>
                      <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="text-black" for="fname">Password</label>
                          <input type="password" id="" name="password"  class="form-control" placeholder="Password">
                        </div>
                      </div>
                      <div class="d-flex" style="justify-content: space-between">
                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember Me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                          <div class="mb-2 w-100">
                              <a href="forgot.html" class="float-end">
                                  Forgot Password?
                              </a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                          <p>pas de compte  ? creer un <a href="{{ route('register') }}">ici</a> </p>
                        </div>
                        <div class="col-4"></div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"   id="login_btn" class="btn btn-primary">Log In</button>
                </div>
              </form>
        </div>
    </div>
</div>
