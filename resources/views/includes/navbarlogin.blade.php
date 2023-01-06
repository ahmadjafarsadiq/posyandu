<!--navbar-->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand">
            <img src="{{asset('frontend/images/logo.png')}}" alt="Logo posyandu">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Form
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('form')}}" class="dropdown-item">Pendaftaran Posyandu</a>
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Activity</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">PAUD</a>
                </li>

                <!--Mobile button-->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('frontend/images/bayi.jpg')}}" width="70" height="70" class="rounded-circle">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
                        </div>
                    </a>
                    <!--Dekstop button-->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-blockd-sm-block d-md-none">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                            Login
                        </button>
                    </form>


                    <!-- <div class="collapse navbar-collapse" id="navbar-list-4">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img href="{!! asset('storage/photo'.Auth::user()->avatar) !!}" width="40" height="40" class="rounded-circle">
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout')}}">Log Out</a>

                                </div>
                            </li>
                        </ul>
                    </div> -->
    </nav>
</div>
</form>

</ul>
</div>
</nav>
</div>