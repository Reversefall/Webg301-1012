<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <div class="d-flex align-items-stretch">
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td><?php echo e($products-> name); ?></td>
                        <td><?php echo e($products -> description); ?></td>
                        <td><?php echo e($products -> category); ?></td>
                        <td><?php echo e($products-> price); ?></td>
                        <td><?php echo e($products -> quantity); ?></td>
                        <td>
                            <img height="120" width="120" src="product/<?php echo e($products -> image); ?>">
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo e(asset('admincss/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admincss/vendor/popper.js/umd/popper.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('admincss/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admincss/vendor/jquery.cookie/jquery.cookie.js')); ?>"> </script>
    <script src="<?php echo e(asset('admincss/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admincss/vendor/jquery-validation/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admincss/js/charts-home.js')); ?>"></script>
    <script src="<?php echo e(asset('admincss/js/front.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/admin/view_product.blade.php ENDPATH**/ ?>