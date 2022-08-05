<div class="dropdown dropdown-menu-end">
    <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="label">
            <span></span>
            <div>{{ Auth::user()->name }}</div>
        </div>
        <img class="img-user" src="{{ asset('assets/images/avatar1.png') }}" alt="user"srcset="">
    </a>
    <ul class="dropdown-menu small">
        <!-- <li class="menu-header">
            <a class="dropdown-item" href="#">Notifikasi</a>
        </li> -->
        <li class="menu-content ps-menu">
            <a href="#">
                <div class="description">
                    <i class="ti-user"></i> Profile
                </div>
            </a>
            <a href="#">
                <div class="description">
                    <i class="ti-settings"></i> Setting
                </div>
            </a>
            <a href="#">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-link">
                        <div class="description">
                            <i class="ti-power-off"></i>Logout 
                        </div>
                    </button>                    
                </form>
            </a>
        </li>
    </ul>
</div>