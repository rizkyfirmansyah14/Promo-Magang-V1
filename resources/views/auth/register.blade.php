<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('include.stylelogin')

</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register')}}" style="margin-top: -5%;">
                    @csrf

                    <span class="login100-form-title p-b-43">
                        Register to continue
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" style="height: 100%;">
                        <span class="focus-input100"></span>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="height: 100%;">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Password" style="height: 100%;">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Password Confirm is required">
                        <input id="password-confirm" class="input100 @error('password-confirm') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm" style="height: 100%;">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                        <a href="{{ route('login')}}" style="margin-top: 20%;">Have an account? Login Now!</a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('https://images.unsplash.com/photo-1580828343064-fde4fc206bc6?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1051&q=80');">
                </div>
            </div>
        </div>
    </div>

    @include('include.jslogin')

</body>

</html>
