<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL('css/register.css')}}">
    <title>Register</title>
</head>
<body>
<div class="container">
        <div class="form-login">
            <h1 class="title-login">Register</h1>
            @if (session('success'))
                <div class="anounce">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="anounce-error">
                    {{ session()->get('error') }}
                </div>
            @endif
            <form action="/register" method="post">
                @csrf
                <div class="login-email">
                    <label for="email">User Name</label>
                    <input class="input-login" type="text" name="email" id="email" placeholder="Enter your User Name" required>
                </div>
                <div class="login-password">
                    <label for="password">Password</label>
                    <input class="input-login" type="password" name="password" id="password" placeholder="Enter your Password" required>
                </div>
                @error('message')
                    <div class="anounce-error">{{ $message }}</div>
                @enderror
                <button type="submit" class="login-buttom">Sign Up</button>
            </form>
            <div class="content-login">
                <p>Already have an account? <a class="register-here" href="/login">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>