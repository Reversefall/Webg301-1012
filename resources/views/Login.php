<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
    </head>
    <script src="js/login.js"></script>
</head>
<!-- login -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="{{ route('login') }}" method="post">
                           
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="" required="">
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Login</button>
                            <p class="text-center pb-4">
                                <a href="#">Forgot your password?</a>
                            </p>
                            <p class="text-center pb-4">
                                Don't have an account?
                                <a href="/register" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    </div>
    <!--//register--
</html>