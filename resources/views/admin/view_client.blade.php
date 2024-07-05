<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    .table_deg
    {
     
        border: 2px solid greenyellow;
    }
    th 
    {
        background-color: skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }
    td
    {
        border: 1px solid skyblue;
        text-align: center;
        color: white;
        
    }

    input[type='search']
    {
        width: 500px;
        height: 60px;
        margin-left: 50px;
    }

    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.slider')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                {{-- <form action="{{ url('client_search') }}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="search">

                </form> --}}

               <div class="div_deg">
                <table class="table_deg">
                    <tr>
                      
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($client as $clients)
                        
                 
                    <tr>
                        {{-- <td>{{$clients->client_name}}</td> --}}

                        {{-- <td>{{$projects->description}}</td> --}}

                            {{-- for showing less description --}}
                        {{-- <td>{!!Str::limit($clients->description,50)!!}</td> --}}
                        <td>
                            <img height="100" width="100" src="clients/{{$clients->image}}">
                          
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{url('update_client',$clients->id)}}">Edit</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_client',$clients->id)}}">Delete</a>
                        </td>
                    </tr>

                   @endforeach
                </table>

                
               </div>
               <div class="div_deg">
               {{$client->onEachSide(1)->links()}}
            </div>
        </div>
            </div>
        </div>
        <!-- JavaScript files-->
        {{-- <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
        <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
        <script src="{{ asset('admincss/js/front.js') }}"></script> --}}

        @include('admin.js')
</body>

</html>
