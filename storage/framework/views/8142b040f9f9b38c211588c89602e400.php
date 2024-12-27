<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <style type="text/css">
    input[type='text']  
    {
        width :400px;
        height: 50px;
    }
    input[type="textarea"]  
    {
        width :400px;
        height: 50px;
      
    }
    .div_design
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }
    .table_design
    {
      text-align: center;
      margin : auto;
      border : 2px solid yellowgreen;
      margin-top: 50px;
      width : 600px;
    }
    th 
    {
      background-color: skyblue;
      padding : 15px;
      font-size : 20px;
      font-weight: bold;
      color : white;
    }
    td 
    {
      color : white;
      padding : 10px;
      border : 1px solid skyblue;
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
            <h1 style ="color: white">Add Category</h1>
            <div class ="div_design">
                <form action="<?php echo e(url('add_category')); ?>" method="post"> 
                    <?php echo csrf_field(); ?>
                    <div>        
                        <input type="text" name ="category"placeholder="Category">
                        <div class ="input_design">
                          <textarea name="description" placeholder="Description"></textarea>
                      </div>

                        <input class="btn btn-primary" type="submit" value ="Add Category">
                    </div>
                </form>
            </div>
            <div>
              <table class="table_design">
                <tr>
                  <th>Category Name</th>
                  <th>Description</th>

                  <th>Edit</th>

                  <th>Delete</th>

                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($data -> name); ?></td>
                  <td><?php echo e($data -> description); ?></td>
                  <td>
                    <a class="btn btn-success" href="<?php echo e(url('edit_category',$data->id)); ?>">Edit</a>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="<?php echo e(url('delete_category',$data->id)); ?>">Delete</a>
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
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/admin/category.blade.php ENDPATH**/ ?>