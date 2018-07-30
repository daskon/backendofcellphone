@extends('layouts.master')

@section('title')
    SellMyCell || My Account
@endsection

@section('content')

    <script src="{{\Illuminate\Support\Facades\URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>

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

    {{--catch the errors of input --}}
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
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ session('status') }}</strong>
        </div>
    @endif

    <!-- my-account-area start -->
    <section class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Upload cell details</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('api/newad')}}" method="post">
                                <fieldset>
                                    <legend>Your Cell Specifications</legend>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Your location </label>
                                        <div class="col-sm-10">
                                            <input
                                                    class="form-control"
                                                    id="location"
                                                    name="location"
                                                    type="text"
                                                    value="{{\Illuminate\Support\Facades\Auth::user()->location}}"
                                                    disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Your Division </label>
                                        <div class="col-sm-10">
                                            <input
                                                    class="form-control"
                                                    id="sub-division"
                                                    name="sub-division"
                                                    type="text"
                                                    value="{{\Illuminate\Support\Facades\Auth::user()->sub_location}}"
                                                    disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ad Title </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Your ad title"
                                              id="title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Ad Description</label>
                                        <div class="col-sm-10">
                                            <textarea cols="10" rows="5" class="form-control"
                                             id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Specifications</label>
                                        <div class="col-sm-10">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec1" name="spec[]" value="Bluetooth">
                                                <label for="spec1">Bluetooth</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec2" name="spec[]" value="wifi" >
                                                <label for="spec2">Wi-Fi</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec3" name="spec[]" value="gps">
                                                <label for="spec3">GPS</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec4" name="spec[]" value="nano-sim">
                                                <label for="spec4">Nano SIM</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec5" name="spec[]" value="dual-sim">
                                                <label for="spec5">Dual SIM</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec6" name="spec[]" value="3g">
                                                <label for="spec6">3G</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec7" name="spec[]" value="4g">
                                                <label for="spec7">4G</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec8" name="spec[]" value="chip">
                                                <label for="spec8">Memory Chip</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec9" name="spec[]" value="camera">
                                                <label for="spec9">Camera</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec10" name="spec[]" value="touch">
                                                <label for="spec10">Touch Screen</label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="spec11" name="spec[]" value="radio">
                                                <label for="spec11">Radio</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Manufacturer</label>
                                        <div class="col-sm-10">
                                            <label for="manufacture"></label>
                                            <select class="form-control" id="manufacture" name="manufacture">
                                                <option></option>
                                                <option value="acer">Acer</option>
                                                <option value="ag-tel">Ag-tel</option>
                                                <option value="alcatel">Alcatel</option>
                                                <option value="apple">Apple</option>
                                                <option value="asus">Asus</option>
                                                <option value="benq">BenQ</option>
                                                <option value="blackberry">BlackBerry</option>
                                                <option value="china-mobile">China Mobile</option>
                                                <option value="dell">Dell</option>
                                                <option value="dialog">Dialog</option>
                                                <option value="e-tel">E-tel</option>
                                                <option value="google">Google</option>
                                                <option value="greentel">Greentel</option>
                                                <option value="hp">HP</option>
                                                <option value="htc">HTC</option>
                                                <option value="huawei">Huawei</option>
                                                <option value="i-mate">i-mate</option>
                                                <option value="ipro">iPro</option>
                                                <option value="lenovo">Lenovo</option>
                                                <option value="lg">LG</option>
                                                <option value="mega-gate">Megagate</option>
                                                <option value="micromax">Micromax</option>
                                                <option value="microsoft">Microsoft</option>
                                                <option value="motorola">Moto</option>
                                                <option value="nokia">Nokia</option>
                                                <option value="oneplus">OnePlus</option>
                                                <option value="oppo">Oppo</option>
                                                <option value="other">Other brand</option>
                                                <option value="palm">Palm</option>
                                                <option value="philips">Philips</option>
                                                <option value="q-mobile">Q Mobile</option>
                                                <option value="samsung">Samsung</option>
                                                <option value="sky">Sky</option>
                                                <option value="sony-ericsson">Sony Ericsson</option>
                                                <option value="sony">Sony</option>
                                                <option value="vivo">Vivo</option>
                                                <option value="xiaomi">Xiaomi</option>
                                                <option value="zigo">Zigo</option>
                                                <option value="zte">ZTE</option></select>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Model Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Model number"
                                                   id="model" name="model">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contact Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Your contact number"
                                              id="contact" name="contact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Cell Price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Your price( Rs )"
                                              id="price" name="price">
                                        </div>
                                    </div>
                                    <button class="button">
                                        <span>Post</span>
                                    </button>
                                </fieldset>
                                <br>
                                @if(session('submit'))
                                <fieldset>
                                    <legend>Upload your cell pictures</legend>
                                    <div>
                                        @include('users.upload')
                                    </div>
                                </fieldset>
                                @endif
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