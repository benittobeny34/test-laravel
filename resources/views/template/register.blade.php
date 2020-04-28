@extends('template.index')
@section('content')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Register</h4></a>

                                <form class="mt-5 mb-5 login-input" method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Email" required>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"placeholder="Password" required>
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation"placeholder="Re-Enter Your Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="{{route('login')}}" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    