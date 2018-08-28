@extends('layouts.master')

@section('content')
    <div class="card w-50 border-success" style="margin: 0 auto;">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            {{--<h5 class="card-title">Special title treatment</h5>--}}
            <form action="/vmslv/login" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                    <a href="/vmslv/forgotpassword" class="float-right">Forgot Password</a>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login"/>
            </form>
        </div>
    </div>
@endsection
