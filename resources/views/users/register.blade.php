@extends('layouts.master')

@section('title')
    SellMyCell || User Account Login
@endsection

@section('content')

    <!-- dropdown select modify -->
    <link rel="stylesheet" href="{{url('css/select2.min.css')}}">

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
                                            <select id="select-location" class="form-control" >
                                                <option></option>
                                                    <option value="colombo">Colombo</option>
                                                    <option value="kandy">Kandy</option>
                                                    <option value="galle">Galle</option>
                                                    <option value="ampara">Ampara</option>
                                                    <option value="anuradhapura">Anuradhapura</option>
                                                    <option value="badulla">Badulla</option>
                                                    <option value="batticaloa">Batticaloa</option>
                                                    <option value="gampaha">Gampaha</option>
                                                    <option value="hambantota">Hambantota</option>
                                                    <option value="jaffna">Jaffna</option>
                                                    <option value="kalutara">Kalutara</option>
                                                    <option value="kegalle">Kegalle</option>
                                                    <option value="kilinochchi">Kilinochchi</option>
                                                    <option value="kurunegala">Kurunegala</option>
                                                    <option value="mannar">Mannar</option>
                                                    <option value="matale">Matale</option>
                                                    <option value="matara">Matara</option>
                                                    <option value="moneragala">Moneragala</option>
                                                    <option value="mullativu">Mullativu</option>
                                                    <option value="nuwara-eliya">Nuwara Eliya</option>
                                                    <option value="polonnaruwa">Polonnaruwa</option>
                                                    <option value="puttalama">Puttalam</option>
                                                    <option value="ratnapura">Ratnapura</option>
                                                    <option value="trincomalee">Trincomalee</option>
                                                    <option value="vavuniya">Vavuniya</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select-division">Division
                                        </label>
                                        <select id="select-division" class="form-control">
                                                <option selected>Select sub-division</option>
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

    <script src="{{\Illuminate\Support\Facades\URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{\Illuminate\Support\Facades\URL::asset('js/select2.min.js')}}"></script>

    <script type="text/javascript">

      $("#select-location").select2({
          placeholder: "Select your location",
          allowClear: true
      }).on('change', function() {

          //catch the location from dropdown and store into data variable
          var data = $("#select-location option:selected").text();

          //find matching divisions from selected location in text files
          $.get( "/" + this.value + ".txt", function(data) {

              lines = data.split('\n');
              var tag = document.getElementById('select-division');

              //create options for dropdown list dynamically
              for(var line = 0; line < lines.length; ++line){
                  tag.options.add(new Option(lines[line]));
              }
          });

          //when new location were selected automatically null options value
          document.getElementById('select-division').innerText = null;
      });

      //prevent input numbers for first name
      $("#input-first").on('change', function() {
          var userStr = document.getElementById('input-first').value;
          if(userStr.match(/\d/)){
              userStr = userStr.replace(/\d+/g,"");
              document.getElementById('input-first').style.border="1px solid red";
              document.getElementById('input-first').focus();
          }
          
      });

    </script>
    <style type="text/css">
        .select2{
            width: 100%!important;
        }
    </style>

    @include('partials.ourbrand')

@endsection








