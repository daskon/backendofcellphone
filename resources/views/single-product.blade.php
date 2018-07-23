@extends('layouts.master')

@section('title')
    SellMyCell || View Product
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
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">adipiscing elit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-product-menu end -->

    <!-- single-product-views start -->
    <section class="single-product-views">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="single-product-tab">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <ul class="single-pro-tab">
                                    @foreach ($cellPics as $obj)
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset($obj->img_path) }}" alt="">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-content">
                                    <h2 class="product-name">
                                        @foreach ($cellInfo as $object)
                                            {{ $object->title }}
                                        @endforeach
                                    </h2>
                                    <div class="product-ratings">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <span><a class="reviewtab">0 reviews</a>

                                     <a class="reviewtab">Write a review</a></span>
                                    </div>
                                    <a href="#" class="social-img"><img src="{{URL::asset('img/link/social.png')}}" alt=""></a>
                                    <div class="price-box">
                                        <span class="special-price">Rs.
                                            @foreach ($cellInfo as $object)
                                                {{ $object->price }}
                                            @endforeach
                                        </span>
                                    </div>
                                    <ul class="pro-content-desc">
                                        <li>
                                            Brand:
                                            <span>
                                                 @foreach ($cellInfo as $object)
                                                    {{ $object->manufacturer }}
                                                @endforeach
                                            </span>
                                        </li>
                                        <li>
                                            Product Code:
                                            <span>
                                                 @foreach ($cellInfo as $object)
                                                    {{ $object->item_id }}
                                                @endforeach
                                            </span>
                                        </li>
                                        <li>
                                            Specifications:
                                            <span>
                                                @foreach($spec as $object)
                                                   {{ $object }} ,
                                                @endforeach
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="add-to-wc">
                                        <button class="btn-wishlist">Add to Wish List</button>
                                    </div>
                                    <div class="add-to-cart">
                                        <label>Contact</label>
                                            <span class="label-info">
                                                 @foreach ($cellInfo as $object)
                                                    {{ $object->contact }}
                                                @endforeach
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-review-tab">
                        <!-- Nav tabs -->
                        <ul class="reviews-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#common" aria-controls="common" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#unique" aria-controls="unique" role="tab" data-toggle="tab">Reviews (0)</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="common">
                                <p>
                                    @foreach ($cellInfo as $object)
                                        {{ $object->description }}
                                    @endforeach
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="unique">
                                <form action="#">
                                    <div class="reviews-review">
                                        <p>There are no reviews for this product.</p>
                                        <h2>Write a review</h2>
                                    </div>
                                    <div class="form-group review-required">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group review-required">
                                        <label>Your Review</label>
                                        <textarea rows="5" class="form-control"></textarea>
                                        <div class="help-block">
                                            <span>Note:</span>
                                            HTML is not translated!
                                        </div>
                                    </div>
                                    <div class="form-group review-required">
                                        <label class="rating-mr">Rating</label>
                                        Bad
                                        <input type="radio" value="1">
                                        <input type="radio" value="2">
                                        <input type="radio" value="3">
                                        <input type="radio" value="4">
                                        <input type="radio" value="5">
                                        Good
                                    </div>
                                    <div class="review-btn pull-right">
                                        <button class="button"><span>Continue</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="related-product">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>Related Products</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="related-product-carousel indicator-style">
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="label-sale">
                                                <span>sale</span>
                                            </div>
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(10)-300x300.jpg')}}" alt="" class="primary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">ipsum dolor</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$90.00</span>
                                                    <span class="old-price">$100.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="label-new">
                                                <span>new</span>
                                            </div>
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(27)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(17)-300x300.jpg')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">blandit vel</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$1000.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="label-new">
                                                <span>new</span>
                                            </div>
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(88)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(24)-300x300.jpg')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">ullamcorper</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(65)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(48)-300x300.png')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">tincidunt ma</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(72)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(70)-300x300.jpg')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">ullamcorper</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(27)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(83)-300x300.jpg')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">tortor nequ</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{URL::asset('img/product/product_(38)-300x300.jpg')}}" alt="" class="primary-img">
                                                <img src="{{URL::asset('img/product/product_(2)-300x300.jpg')}}" alt="" class="secondary-img">
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><em>Add to Wish List</em></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><em>Compare this Product</em></a>
                                                    </li>
                                                </ul>
                                                <button class="button" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Ut ultrices</a></h2>
                                                <div class="product-ratings">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="special-price">$100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="left-sidebar-banner">
                        <div class="single-banner">
                            <a href="#"><img src="{{URL::asset('img/banner/banner_category.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="bestseller-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title section-title-3">
                                    <h2>Bestseller</h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="best-seller-carousel indicator-style">
                                        <div class="col-lg-12">
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(52)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">suscipit quis</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$100.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(17)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">Aenean qua</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="old-price">$199.00</span>
                                                        <span class="special-price">$159.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(27)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">blandit vel</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$1000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(32)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">mattis sem</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$100.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(23)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">cubilia Cura</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$1000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(21)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">Fusce nec</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="old-price">$199.00</span>
                                                        <span class="special-price">$159.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(28)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">ipsum sit</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$80.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-most-view">
                                                <div class="most-view-img">
                                                    <a href="#">
                                                        <img src="{{URL::asset('img/best_seller/product_(32)-70x70.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="most-view-content">
                                                    <h5><a href="#">mattis sem</a></h5>
                                                    <div class="product-ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <span class="reviews"><a href="#">0 reviews</a></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="special-price">$100.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single-product-views end -->
@include('partials.ourbrand')
@endsection




