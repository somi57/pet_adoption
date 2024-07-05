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

        h1
        {
            color: white;
        }

        label
        { 
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
            color: white!important;

        }

        input[type='text']
        {
            width: 350px;
            height: 50px;
        }
        textarea
        {
            width: 450px;
            height: 80px;
        }
        .input_deg
        {
          padding: 15px;  
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
                <h1>Add Servicess</h1>
                <div class="div_deg">
                    <form action="{{url('upload_team')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label>Team Name</label>
                            <input type="text" name="name" required>
                        </div>

                        <div class="input_deg">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Team Image</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Add Team">
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
