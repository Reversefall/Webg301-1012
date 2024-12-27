<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php echo $__env->make('admin.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/admin/index.blade.php ENDPATH**/ ?>