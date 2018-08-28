@extends('layouts.master') @section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <h3 class="text-center">Signup</h3>
            <form action="/vmslv/registerUser" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required/>
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input class="form-control" type="text" name="mobile" id="mobile"/>
                </div>

                    <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" required/>
                </div>

                <div class="form-group">
                    <label for="cfmpassword">Confirm Password</label>
                    <input class="form-control" type="password" name="cfmpassword" id="cfmpassword" required/>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" type="text" name="location" id="location"/>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city"/>
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input class="form-control" type="text" name="state" id="state"/>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input class="form-control" type="text" name="country" id="cuntry"/>
                </div>

                <input type="submit" class="btn btn-success" value="Signup"/>
            </form>
        </div>
    </div>
@endsection
