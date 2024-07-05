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

                <form action="{{ url('project_search') }}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="search">

                </form>

               <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Project Title</th>
                        <th>Description</th>
                        <th>Age</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($project as $projects)
                        
                 
                    <tr>
                        <td>{{$projects->title}}</td>

                        {{-- <td>{{$projects->description}}</td> --}}

                            {{-- for showing less description --}}
                        <td>{!!Str::limit($projects->description,50)!!}</td>
                        <td>{{$projects->age}}</td>
                        <td>
                            <img height="120" width="120" src="projects/{{$projects->image}}">
                            {{-- <img scr="{{asset('web/public/storage/images/agency-img.jpg')}}" alt="hello"/> --}}
                            {{-- <img src="{{asset('images/p2.png')}}" alt="hello"/> --}}
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{url('update_project',$projects->id)}}">Edit</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_project',$projects->id)}}">Delete</a>
                        </td>
                    </tr>

                   @endforeach
                </table>

                
               </div>
               <div class="div_deg">
               {{$project->onEachSide(1)->links()}}
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
