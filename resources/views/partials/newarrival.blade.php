<!-- new-arrival-area start -->
<section class="new-arrival-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
        <?php
          $image = App\CellPictures::all()->unique('item_id');
          $details = \App\MobileDetails::all();
        ?>
        @foreach($image->chunk(4) as $imageChunk)
        <div class="row">
            <div class="product-carousel indicator-style">
                @foreach($imageChunk as $image)
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="label-sale">
                                <span>sale</span>
                            </div>
                            <a href="{{url('api/one-item')}}">
                                <img src="{{$image->img_path}}" alt="" class="primary-img">
                                <img src="{{$image->img_path}}" alt="" class="secondary-img">
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
                                <h2 class="product-name"><a href="#">
                                        @foreach($details as $detail)
                                            {{$detail->description}}
                                        @endforeach
                                    </a></h2>
                                <div class="product-ratings">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <span class="reviews"><a href="#">0 reviews</a></span>
                                </div>
                                <div class="price-box">
                                    <span class="old-price">$199.99</span>
                                    <span class="special-price">$159.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            @endforeach
    </div>
</section>
<!-- new-arrival-area end -->