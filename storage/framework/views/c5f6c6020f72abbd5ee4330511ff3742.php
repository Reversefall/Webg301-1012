<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <style type = "text/css">
        .div_design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type="text"] {
            width: 400px;
            height: 50px;
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
            <h1 style ="color: #ffffff">Update Category</h1>
                <div class ="div_design"> 
                    <form action="<?php echo e(url('update_category',$data -> id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type ="text" name="category" value ="<?php echo e($data->name); ?>">
                        <input type ="text" name="category" value ="<?php echo e($data->description); ?>">
                        <input class="btn btn-primary" type ="submit" value ="Update Category">
                    </form>
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
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>