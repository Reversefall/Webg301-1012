@extends('layouts')
@section('content')
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form-login">
            <h1 class="title-login">Login</h1>
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
            <form action="/login" method="post">
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
                <button type="submit" class="login-buttom">Sign In</button>
            </form>
            <div class="content-login">
                <p>Don't have an account yet? <a class="register-here" href="/Register">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>
@endsection