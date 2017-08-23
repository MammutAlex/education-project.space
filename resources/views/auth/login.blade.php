@extends('layouts.app')

@section('content')

    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h4 class="margin-b-20">Login to your account</h4>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--end page header-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 margin-b-60">
                <div class="login-register-box">
                    <form class="margin-b-30" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control login-email" name="email"
                                   value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control login-password" name="password"
                                   required>
                        </div>

                        <div class="form-group">
                            <div class="clearfix">
                                <div class="checkbox remember pull-left">
                                    <label>
                                        <input type="checkbox" class="icheck"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-block btn-primary">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
