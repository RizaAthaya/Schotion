<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    <title>Login</title>
</head>

<body>
    @include('navbar')

    <div class="registerPage">
        <div class="leftSection">
            <img src="{{ asset('images/register-1.png') }}" />
        </div>
        <div class="rightSection">
            <div class="text">
                <h3 class="title">Registration Form</h3>
                <h5>Already have an account? <a href="/auth/login">Login</a></h5>
            </div>
            <form class="registerForm" action="{{ route('auth.register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required placeholder="Full name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        placeholder="Confirm Password">
                </div>
                <div class="button-container">
                    <button type="submit">Register</button>
                </div>
            </form>

        </div>
    </div>

    @include('footer')
</body>

</html>
