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
    }
    label
    {
        display: inline-block;
        width: 200px;
        padding: 20px;
    }
    imput[type='text']
    {
        width: 300px;
        height: 60px;
    }
    textarea
    {
        width: 400px;
        height: 80px;
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
 
                <h2>Update Product</h2>
                <div class="div_deg">
                    <form action="{{ url('edit_project',$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $data->title }}">
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description">{{ $data->description }}</textarea>
                        </div>
                        <div>
                            <label>Age</label>
                            <input type="age" name="age" value="{{ $data->age }}">
                        </div>

                        <div>
                            <label>Current Image</label>
                            <img width="150" src="/projects/{{ $data->image }}">
                        </div>

                        <div>
                            <label>New Image</label>
                            <input type="file" name="image">
                        </div>

                        <div>
                            <input class="btn btn-success" type="submit" value="Update Project">
                        </div>

                    </form>
                </div>
               
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
        <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
        <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
