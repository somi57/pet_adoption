@include('home.css')
@include('home.header')
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          OUR CLIENTS
        </h2>
      </div>
      <div class="row">

        @foreach ($client as $clients)
     

        <div class="col-sm-6 col-md-4 col-lg-3"> 
          <div class="box">
           
              <div class="img-box">
                <img src="clients/{{ $clients->image }}" alt="">
              </div>
              {{-- <div class="detail-box">
                <h6>{{ $projects->title }}</h6>   
              </div> --}}
            
          {{-- <div style="padding: 15px">
            <a class="btn btn-danger" href="{{ url('project_details',$projects->id) }}">Details</a>
          </div> --}}
          </div>
        </div>

        @endforeach
      </div>
      </div>
      
    </div>
  </section>
  @include('home.footer')