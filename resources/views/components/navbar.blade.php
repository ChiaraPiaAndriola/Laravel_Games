<nav class="navbar navbar-expand-lg bg-body-dark bg-dark sticky-top p-0 ">
    <div class="container-fluid">
      <a class="navbar-brand " href="{{route('home')}}" > <img src="/media/logo.png" alt="" class="logo mx-3"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fa-solid fa-bars" style="color: #ffffff;"></i></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
          <li class="nav-item">

            <a class="nav-link navbar-a mx-2" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item ">
            
            <a class="nav-link navbar-a mx-2" href="{{route('index.games')}}">Giochi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-a mx-2" href="{{Route('form')}}">Contattaci</a>
          </li>
          @auth
         
        </ul>
        <li class=" nav-link dropdown btn-group ">
          <a class="btn dropdown-toggle text-white m-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-color ">
            <li class="d-flex justify-content-center ">
              <a class=" border-0 btn  dropdown-link" href="{{route('game.create')}}">Crea Gioco</a>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li class="d-flex justify-content-center"> 
              <form action="{{route('logout')}}" method="post">
              @csrf
              <button class="btn  mx-1  dropdown-link">Logout</button>
              </form>
            </li>
          </ul>
        </li>

        @else
        <a class="nav-link mx-2 navbar-a " href="{{route('register')}}">Registrati</a>
        <a class="nav-link mx-2 navbar-a " href="{{route('login')}}">Login</a>
        @endauth
      </div>
    </div>
  </nav>