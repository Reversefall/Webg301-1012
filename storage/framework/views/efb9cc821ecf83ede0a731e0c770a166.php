<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style type="text/css">
        .div_design{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        label {
            display : inline-block;
            width : 200px;
            font-size : 18px!important;
            color : #ffffff !important;
        }
        input[type="text"]{
            width : 350px;
            height : 50px;
        }
        textarea{
            width : 450px;
            height : 80px;
        }
        .input_design{
            padding : 15px;
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
            <h1 style ="color: #ffffff">Create Product</h1>
            <div class ="div_design"> 
                <form action="<?php echo e(url('upload_product')); ?>" method="post" enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>

                    <div class ="input_design">
                        <label>Product Title</label>
                        <input type="text" name="name">
                    </div>
                    <div class ="input_design">
                        <label>Description</label>
                        <textarea name="description" required></textarea>
                    </div>
                    <div class ="input_design">
                        <label>Price</label>
                        <input type="text" name="price">
                    </div>
                    <div class ="input_design">
                        <label>Quantity</label>
                        <input type="number" name="quantity">
                    </div>
                    <div class ="input_design">
                        <label>Category</label>


                        <select name ="category" required>
                            <option></option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value ="<?php echo e($category-> name); ?>"><?php echo e($category-> name); ?></option>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                    <div class ="input_design">
                        <label>Product Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class ="input_design">
                        <input class="btn btn-success" type ="submit" value ="Add Product"> 
                    </div>
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
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/admin/add_product.blade.php ENDPATH**/ ?>