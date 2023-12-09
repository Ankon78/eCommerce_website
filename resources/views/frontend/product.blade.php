@extends('frontend.layouts.app')

@section('content')

<div class="container for-you">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Recommendation For You</h2><!-- End .title -->
        </div><!-- End .heading-left -->

       <div class="heading-right">
            <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
       </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="products">
        <div class="row justify-content-center">
            @foreach ($products as $item )


            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="">
                            <img src="{{ asset($item->image) }}" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="#" onclick="addToCart(this,'{{ $item->id }}')" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">{{ isset($item->category) ? $item->category->name : '' }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="">{{ $item->name }}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">{{ number_format((float)$item->price, 2, '.', '') }} TK</span>

                        </div><!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

            @endforeach

        </div><!-- End .row -->
    </div><!-- End .products -->
</div><!-- End .container -->


@endsection
