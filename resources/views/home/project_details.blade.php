<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
    .div_center
    {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
       
     </div>
     <!-- Project details start --> 


     <section class="shop_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Our Projects 
            </h2>
          </div>
          <div class="row">
    
       
         
    
            <div class="col-md-12">
              <div class="box">
               
                  <div class="div_center">
                    <img width="400" src="/projects/{{ $data->image }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>{{ $data->title }}</h6>   
                  </div>

<br>
                  <div class="detail-box">
                    <p>{{ $data->description }}</p>   
                  </div>


              {{-- <div style="padding: 15px">
                <a class="btn btn-danger" href="{{ url('project_details',$data->id) }}">Details</a> --}}
              </div>
              </div>
            </div>
    
           
          </div>
          </div>
          <div class="btn-box">
            <a href="">
              View All Project
            </a>
          </div>
        </div>
      </section>

  <!-- Project details end --> 

    <!-- info section -->
    @include('home.footer')

</body>

</html>
