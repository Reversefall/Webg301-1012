<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        .div_design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .table_design
        {
            border : 2px solid greenyellow;
        }
        th {
            background-color: skyblue;
            color : white;
            font-size : 19px;
            font-weight: bold;
            padding : 15px;
        }
        td {
            border : 2px solid skyblue;
            text-align: center;
        }    
        </style>
  </head>
  <body>
    <header class="header">   
      @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class = "div_design">
                <table class ="table_design">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                    @foreach ($product as $products) 
                    <tr>
                        <td>{{$products-> name}}</td>
                        <td>{{$products -> description }}</td>
                        <td>{{$products -> category }}</td>
                        <td>{{$products-> price }}</td>
                        <td>{{$products -> quantity}}</td>
                        <td>
                            <img height="120" width="120" src="product/{{$products -> image}}">
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>