<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <span>
            <?php echo e(config('app.name','My Website')); ?>

        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <div class="user_option">
          <?php if(Route::has('login')): ?>
          <?php if(auth()->guard()->check()): ?> 
          <a href="">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
            <form style ="padding :15px" method="POST" action="<?php echo e(route('logout')); ?>">
              <?php echo csrf_field(); ?>
              <input class ="btn btn-success" type ="submit" value ="Logout">
            </form>
          <?php else: ?>
          <a href="<?php echo e(url('/login')); ?>">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <br><br>
          <a href="<?php echo e(url('/register')); ?>">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
                Register
            </span>
          </a>
          <?php endif; ?>

          <?php endif; ?>
        </div>
      </div>
    </nav>
  </header><?php /**PATH C:\Users\acer\Desktop\1670WEB\New folder (2)\Webg301-1012\resources\views/home/header.blade.php ENDPATH**/ ?>