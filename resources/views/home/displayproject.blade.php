@include('home.css')
@include('home.header')
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          PET INFORMATION
        </h2>
      </div>
      <div class="row">

        @foreach ($project as $projects)
     

        <div class="col-sm-6 col-md-4 col-lg-3"> 
          <div class="box">
           
              <div class="img-box">
                <img src="projects/{{ $projects->image }}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{ $projects->title }}</h6>   
              </div>
              <div class="detail-box">
                <h6>{{ $projects->age }}</h6>   
              </div>
            
          <div style="padding: 15px">
            <a class="btn btn-danger" href="{{ url('project_details',$projects->id) }}">Details</a>
          </div>
          <div style="padding: 15px">
            <a class="btn btn-primary" href="{{ url('adoptionform/store',$projects->id) }}">Adopt</a>
          </div>
          </div>
        </div>

        @endforeach
      </div>
      </div>
      
    </div>
  </section>
  @include('home.footer')