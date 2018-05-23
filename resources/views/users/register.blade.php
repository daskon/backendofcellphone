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
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-product-menu end -->
    <!-- my-account-area start -->
    <section class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-box-login">
                                <h2>New Customer</h2>
                                <p>
                                    <strong>I am a new customer</strong>
                                </p>
                                <form action="{{url('api/register')}}" method="post">
                                    <div class="form-group">
                                        <label class="control-label" for="input-first">First Name
                                        </label>
                                        <input
                                                id="input-first"
                                                class="form-control"
                                                type="text"
                                                placeholder="First Name"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-last">Last Name
                                        </label>
                                        <input
                                                id="input-last"
                                                class="form-control"
                                                type="text"
                                                placeholder="Last Name"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Email
                                        </label>
                                        <input
                                                id="input-email"
                                                name="input-email"
                                                class="form-control"
                                                type="email"
                                                placeholder="email address"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Location
                                        </label>
                                            <select id="select-location" class="form-control">
                                                <option value="">Location</option>
                                                <optgroup label="Districts">
                                                    <option value="1506" selected="selected">Colombo</option>
                                                    <option value="1636">Kandy</option>
                                                    <option value="1559">Galle</option>
                                                    <option value="1432">Ampara</option>
                                                    <option value="1452">Anuradhapura</option>
                                                    <option value="1475">Badulla</option>
                                                    <option value="1491">Batticaloa</option>
                                                    <option value="1577">Gampaha</option>
                                                    <option value="1592">Hambantota</option>
                                                    <option value="1605">Jaffna</option>
                                                    <option value="1620">Kalutara</option>
                                                    <option value="1658">Kegalle</option>
                                                    <option value="1670">Kilinochchi</option>
                                                    <option value="1674">Kurunegala</option>
                                                    <option value="1706">Mannar</option>
                                                    <option value="1712">Matale</option>
                                                    <option value="1724">Matara</option>
                                                    <option value="1740">Moneragala</option>
                                                    <option value="1752">Mullativu</option>
                                                    <option value="1757">Nuwara Eliya</option>
                                                    <option value="1763">Polonnaruwa</option>
                                                    <option value="1771">Puttalam</option>
                                                    <option value="1788">Ratnapura</option>
                                                    <option value="1806">Trincomalee</option>
                                                    <option value="1818">Vavuniya</option>
                                                </optgroup>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select-division">Division
                                        </label>
                                        <select id="select-division" class="form-control">
                                            <option value="">Division</option>
                                            <optgroup label="Division">
                                                <option value="1636">Nugegoda</option>
                                                <option value="1559">Dehiwala</option>
                                                <option value="1432">Colombo 6</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password
                                        </label>
                                        <input
                                                id="input-password"
                                                class="form-control"
                                                type="password"
                                                placeholder="Account password"
                                                required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Retype Password
                                        </label>
                                        <input
                                                id="input-repassword"
                                                class="form-control"
                                                type="password"
                                                placeholder="Repeat password"
                                                required>
                                    </div>
                                    <button class="button" value="" type="submit">
                                        <span>Register</span>
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








