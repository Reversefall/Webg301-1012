<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <span>
            {{config('app.name','My Website')}}
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <div class="user_option">
          @if (Route::has('login'))
          @auth 
          <a href="">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
            <form style ="padding :15px" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class ="btn btn-success" type ="submit" value ="Logout">
            </form>
          @else
          <a href="{{ url('/login') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <br><br>
          <a href="{{ url('/register') }}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
                Register
            </span>
          </a>
          @endauth

          @endif
        </div>
      </div>
    </nav>
  </header>