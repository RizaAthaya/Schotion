<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <title>Login</title>
</head>

<body>
    @include('navbar')

    <div class="loginPage">
        <div class="leftSection">
            <img src="{{ asset('images/login-1.png') }}" />
        </div>
        <div class="rightSection">
            <div class="text">
                <h3 class="title">Login Form</h3>
                <h5>Don’t have an account? <a href="/auth/register">Register</a></h5>
            </div>
            <form class="loginForm" action="{{ route('auth.login') }}" method="post">
                @csrf
                @if (session('error_message'))
                    <div class="errorAuth">{{ session('error_message') }}</div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>
                <div class="button-container">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    @include('footer')

</body>

</html>
