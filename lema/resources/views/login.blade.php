<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/logo.svg')}}" type="image/cvg">
    <title>LEMA</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<section id="login">
    {{--    <div class="logo">--}}
    {{--        <img src="{{asset('img/logo-gray.svg')}}" alt="logo">--}}
    {{--    </div>--}}

    {{--    <form action="">--}}
    {{--        <input type="text">--}}
    {{--        <input type="text">--}}
    {{--        <input type="text">--}}
    {{--        <input type="text">--}}
    {{--    </form>--}}

    <div class="login__form">
        <div class="login__form__header">
            <a href="/" class="text-center text-light-gray mb-4">
                <img src="{{asset('img/logo-gray.svg')}}" alt="logo">
            </a>
        </div>

        <div class="login__form__body shadow">
            <div class="form_alert">
                <i class="fa fa-check-circle"></i>
                <div class="text-body">An email with password reset instructions has been sent to your email address, if
                    it exists on our system.
                </div>
            </div>

            <a href="" class="btn btn-light btn-block">
                <i class="fa fa-google"></i>
                Continue with Google
            </a>

            <div class="page-separator">
                <div class="page-separator__text">or</div>
            </div>

            <form action="#">
                <div class="form-group">
                    <label class="text-label" for="email">Email Address:</label>
                    <div class="input-group">
                        <input id="email" type="email" required="" class="form-control form-control-prepended"
                               placeholder="john@doe.com">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="password">Password:</label>
                    <div class="input-group">
                        <input id="password" type="password" required="" class="form-control form-control-prepended"
                               placeholder="Enter your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-1">
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                    <div class="form_remember">
                        <input type="checkbox" checked="" id="remember">
                        <label for="remember">Remember me for 30 days</label>
                    </div>
                </div>
                <div class="form-group text-center mb-0">
                    <a href="">Forgot password?</a> <br>
                    Don't have an account? <a class="text-underline" href="#">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
