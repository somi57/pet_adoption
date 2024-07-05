<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
     <br><br>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('abouts') }}">
               About Us
            </a>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('projects') }}">
                Pet Information
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">
              Services
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('teams') }}">
               Teams
            </a>
          </li>

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('clients') }}">
               Client
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
        <div class="user_option">

          @if (Route::has('login'))

          @auth

          <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
            @csrf

            {{-- <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a> --}}

            <input class="btn btn-success" type="submit" value="Logout">
        </form>
            

        @else
         
          <a href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>

          <a href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
                Register
            </span>
          </a>

          @endauth
          @endif

        
          {{-- <form class="form-inline ">
            <button class="btn nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form> --}}
        </div>
      </div>
    </nav>
  </header>

