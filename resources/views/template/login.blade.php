<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateStyle.css')}}">

</head>
<body>

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html"><h4>Blog Login</h4></a>

                            <form class="mt-5 mb-5 login-input" method="post" action="{{ route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"
                                           placeholder="Password">
                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button class="btn login-form__btn submit w-100">Log In</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                            <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html"
                                                                                     class="text-primary">Sign
                                    Up</a> now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
