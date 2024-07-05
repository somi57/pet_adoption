@include('home.css')
@include('home.header')
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          OUR SERVICES 
        </h2>
      </div>
      <div class="row">

        @foreach ($service as $services)
     

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           
              <div class="img-box">
                <img src="services/{{ $services->image }}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{ $services->service_name}}</h6>   
              </div>
            
          {{-- <div style="padding: 15px">
            <a class="btn btn-danger" href="{{ url('service_details',$services->id) }}">Details</a>
          </div> --}}
          </div>
        </div>

        @endforeach
      </div>
      </div>
      
    </div>
  </section>
  @include('home.footer')