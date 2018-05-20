@extends('layouts.master')

@section('title')
    SellMyCell || My Account
@endsection

@section('content')
    <!-- single-product-menu start -->
    <div class="single-product-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pro-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-product-menu end -->

    <!-- my-account-area start -->
    <section class="my-account-area accordion-my-account">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Upload cell details</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{--<img src="http://placehold.it/180" alt="your image" id="firstImg">--}}
                            <div id="preview"></div>
                            <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                                {!! csrf_field() !!}
                                    <div class="form-group required">
                                        <div class="col-sm-10">
                                            <input type="file" name="image[]" class="form-control" multiple>
                                            <input type="submit" class="btn btn-success" name="imgSubmit" >
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>My Account</h1>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Edit your account information
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="easy-2">
                                        <h1>My Account Information</h1>
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Your Personal Details</legend>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">First Name </label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Last Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">E-Mail</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="email" placeholder="E-Mail">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Telephone</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="tel" placeholder="Telephone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Fax</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Fax">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <button class="button pull-left">
                                            <span>Back</span>
                                        </button>
                                        <button class="button pull-right">
                                            <span>Continue</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Change your password
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="easy-2">
                                        <h1>Change Password</h1>
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Your Password</legend>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <button class="button pull-left">
                                            <span>Back</span>
                                        </button>
                                        <button class="button pull-right">
                                            <span>Continue</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Modify your address book entries
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="easy-2">
                                        <h1>Address Book Entries</h1>
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">
                                                    Sajid Hossain
                                                    <br> hastech
                                                    <br> Road#1 , Block#c
                                                    <br> Rampura.
                                                    <br> Dhaka
                                                    <br> Bangladesh
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-info g6" href="#">Edit</a>
                                                    <a class="btn btn-danger g6" href="#">Delete</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <button class="button pull-left">
                                            <span>Back</span>
                                        </button>
                                        <button class="button pull-right">
                                            <span>Continue</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" href="../wishlist.html">
                                        Modify your Wishlist
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my-account-area end -->
    @include('partials.ourbrand')
@endsection