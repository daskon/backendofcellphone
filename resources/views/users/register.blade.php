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
                                                name="input-first"
                                                class="form-control"
                                                type="text"
                                                placeholder="First Name"
                                                required>
                                        <p id="ferror" style="display:none; color: #d60000;">Please, give valid first name</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-last">Last Name
                                        </label>
                                        <input
                                                id="input-last"
                                                name="input-last"
                                                class="form-control"
                                                type="text"
                                                placeholder="Last Name"
                                                required>
                                        <p id="lerror" style="display:none; color: #d60000;">Please, give valid last name</p>
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
                                        <p id="eerror" style="display:none; color: #d60000;">Please, give valid email address!</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select-location">Location
                                        </label>
                                            <select id="select-location" name="select-location" class="form-control" >
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
                                                    <option value="other">Other</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select-division">Division
                                        </label>
                                        <select id="select-division" name="select-division" class="form-control">
                                                <option selected>Select sub-division</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password
                                        </label>
                                        <input
                                                id="input-password"
                                                name="input-password"
                                                class="form-control"
                                                type="password"
                                                placeholder="Password: length(8), letters and numbers only"
                                                required>
                                        <p id="epass" style="display:none; color: #d60000;">Password: length(8), letters and numbers</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-repassword">Retype Password
                                        </label>
                                        <input
                                                id="input-repassword"
                                                class="form-control"
                                                type="password"
                                                placeholder="Repeat password"
                                                required>
                                        <p id="erpass" style="display:none; color: #d60000;">Password not match!</p>
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

      //prevent numbers for first name field
      $("#input-first,#input-last").on('change', function(){

          var first = document.getElementById('input-first').value;
          var last = document.getElementById('input-last').value;

          var ferror = document.getElementById('ferror');
          var lerror = document.getElementById('lerror');

          if (typeof first !== 'undefined'){
              if(first.match(/\d/)){
                  first = first.replace(/\d+/g,"");
                  document.getElementById('input-first').style.border="1px solid red";
                  ferror.style.display = "block";
                  document.getElementById('input-first').focus();
              }
              else {
                  document.getElementById('input-first').style = null;
                  ferror.style.display = "none";
              }
          }
          if (typeof last !== 'undefined'){
              if(last.match(/\d/)){
                  last = last.replace(/\d+/g,"");
                  document.getElementById('input-last').style.border="1px solid red";
                  lerror.style.display = "block";
                  document.getElementById('input-last').focus();
              }
              else {
                  document.getElementById('input-last').style = null;
                  lerror.style.display = "none";
              }
          }
      });

      $("#input-email").on('change', function() {

          var email = document.getElementById('input-email').value;
          var error = document.getElementById('eerror');

          var regularExpression = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))){2,6}$/i;
          valid = regularExpression.test(email);

          if(!valid){
              document.getElementById('input-email').style.border="1px solid red";
              error.style.display = "block";
              document.getElementById('input-email').focus();
          }
          else {
              document.getElementById('input-email').style = null;
              error.style.display = "none";
          }
      });

      $("#input-password").on('change', function () {

          var pass = document.getElementById('input-password').value;

          var epass = document.getElementById('epass');

          var letter = /[a-z]/;
          var number = /[0-9]/;

          if(pass.length < 8 || !letter.test(pass) || !number.test(pass)){
              document.getElementById('input-password').style.border="1px solid red";
              epass.style.display = "block";
              document.getElementById('input-password').focus();
          }
          else {
              document.getElementById('input-password').style = null;
              epass.style.display = "none";
          }
      });

      $("#input-repassword").on('change', function () {

          var pass = document.getElementById('input-password').value;
          var rpass = document.getElementById('input-repassword').value;
          var erpass = document.getElementById('erpass');

          if(pass !== rpass){
              document.getElementById('input-repassword').style.border="1px solid red";
              erpass.style.display = "block";
              document.getElementById('input-repassword').focus();
          }
          else {
              document.getElementById('input-repassword').style = null;
              erpass.style.display = "none";
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