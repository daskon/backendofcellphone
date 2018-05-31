<!-- header-area start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-4">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{URL::asset('img/logo/logo.png')}}" alt=""></a>
                    </div>
                    <div class="top-link">
                        <ul class="menu dropit">
                            <li class="my-account"><a title="My Account" href="{{url('api/myaccount')}}">My Account</a></li>
                            <li class="my-wishlist"><a title="Wish List (0)" href="#">Wish List (0)</a></li>
                            {{--<li class="my-shoppingcart"><a title="Shopping Cart" href="#">Shopping Cart</a></li>--}}
                            {{--<li class="my-checkout"><a title="Checkout" href="#">Checkout</a></li>--}}
                            <li class="logout-in">
                                <a title="Login"
                                   href="{{url('api/login')}}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8">
                    <div class="top-bar">
                        <div class="top-currency hidden-xs">
                            <div class="lang-curr">
                                <ul>
                                    <li>
                                        <span>USD</span>
                                        <ul class="dropdown-select-menu">
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-lang hidden-xs">
                            <div class="lang-curr">
                                <ul>
                                    <li>
                                        <span>Account</span>
                                        <ul class="dropdown-select-menu">
                                            <li><a href="{{url('api/logout')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="search" class="hidden-xs">
                            <input type="text" placeholder="Search">
                            <span>
        <button class="button"><i class="fa fa-search"></i></button>
        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>