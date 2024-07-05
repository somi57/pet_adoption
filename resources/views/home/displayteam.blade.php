@include('home.css')
@include('home.header')
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          OUR TEAMS
        </h2>
      </div>
      <div class="row">

        @foreach ($team as $teams)
     

        <div class="col-sm-6 col-md-4 col-lg-3"> 
          <div class="box">
           
              <div class="img-box">
                <img src="teams/{{ $teams->image }}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{ $teams->name }}</h6>   
              </div>
              <div class="detail-box">
                <h10>{{ $teams->description }}</h10>
              </div>
            
          {{-- <div style="padding: 15px">
            <a class="btn btn-danger" href="{{ url('team_details',$teams->id) }}">Details</a>
          </div> --}}
          </div>
        </div>

        @endforeach
      </div>
      </div>
      
    </div>
  </section>
  @include('home.footer')