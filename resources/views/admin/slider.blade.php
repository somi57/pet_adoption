<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">DEVOPS TECHNOLOGY</h1>
          <p>Web Designer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>


              
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Service </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_service')}}">Add Service</a></li>
                  <li><a href="{{url('view_service')}}">View Service</a></li> 
                   
                </ul>
              </li>

              {{-- <li>
                {{-- <a href="{{url('view_service')}}"> <i class="icon-grid"></i>
                  Services 
                </a>
              </li> --}}

              {{-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
              <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> --}}

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Projects </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_project')}}">Add Project</a></li>
                  <li><a href="{{url('view_project')}}">View Project</a></li>
                  {{-- <li><a href="#">Page</a></li> --}}
                </ul>
              </li>

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Client </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_client')}}">Add Client</a></li>
                  <li><a href="{{url('view_client')}}">View Client</a></li> 
                   
                </ul>
              </li>

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Team </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_team')}}">Add Team</a></li>
                  <li><a href="{{url('view_team')}}">View Team</a></li> 
                   
                </ul>
              </li>
            
      </ul>
    </nav>