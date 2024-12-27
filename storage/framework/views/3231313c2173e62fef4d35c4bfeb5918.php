<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end header section -->
    <!-- slider section -->
    <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
  <!-- end shop section -->
  <!-- contact section -->


  <!-- end contact section -->

   <?php echo $__env->make('home.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- info section -->
  <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- end info section -->


  <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/home/index.blade.php ENDPATH**/ ?>