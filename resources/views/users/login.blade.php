@extends('layouts.master')

@section('title')
    SellMyCell || User Account Login
@endsection

@section('content')
    <!-- single-product-menu start -->
    <div class="single-product-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pro-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-product-menu end -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    <!-- my-account-area start -->
    <section class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-box-login">
                                <h2>New Customer</h2>
                                <p>
                                    <strong>Register Account</strong>
                                </p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                <button class="button">
                                    <span><a href="{{url('api/register')}}">Continue</a></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-box-login">
                                <h2>Returning Customer</h2>
                                <p>
                                    <strong>I am a returning customer</strong>
                                </p>
                                <form action="{{url('api/login')}}" method="post">
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail Address
                                        </label>
                                        <input
                                                id="input-email"
                                                name="input-email"
                                                class="form-control"
                                                type="email"
                                                placeholder="E-Mail Address"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password
                                        </label>
                                        <input
                                                id="input-password"
                                                name="input-password"
                                                class="form-control"
                                                type="password"
                                                placeholder="Password"
                                                required>
                                        <br>
                                        <a href="#">Forgotten Password</a>
                                    </div>
                                    <button class="button" value="" type="submit">
                                        <span>Login</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="sidebar-menu-2">
                        <a class="list-group-item" href="#">Address Book</a>
                        <a class="list-group-item" href="#">Wish List</a>
                        <a class="list-group-item" href="#">Downloads</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my-account-area end -->

    @include('partials.ourbrand')

@endsection








