@extends('app')
@section('content')
    <section id="page-content" class="sidebar-both">
        <div class="container">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Trainer</h4>
                        @foreach($team as $teams)
                        <ul class="list list-lines">
                            <li><a href="{{ route('team') }}">{{$teams->name}}</a> <span class="count">(6)</span>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="widget clearfix widget-shop">
                        <h4 class="widget-title">Latest Products</h4>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/10.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/6.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/products/7.jpg" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Sidebar-->
                <!-- Content-->
                <div class="content col-lg-6">
                    <div class="product">
                        <div class="row m-b-40">
                            <div class="col-lg-12">
                                <div class="product-image">
                                    <!-- Carousel slider -->
                                    <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                                        <a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                        </a>
                                        <a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                        </a>
                                    </div>
                                    <!-- Carousel slider -->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="product-category">Women</div>
                                    <div class="product-title">
                                        <h3><a href="#">Consume Tshirt</a></h3>
                                    </div>
                                    <div class="product-price"><ins>$39.00</ins>
                                    </div>
                                    <div class="product-rate">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-reviews"><a href="#">3 customer reviews</a>
                                    </div>
                                    <div class="seperator m-b-10"></div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
                                    <div class="product-meta">
                                        <p>Tags: <a href="#" rel="tag">Clothing</a>, <a rel="tag" href="#">T-shirts</a>
                                        </p>
                                    </div>
                                    <div class="seperator m-t-20 m-b-10"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product additional tabs -->
                        <div class="comments" id="comments">
                            <div class="comment_number">
                                Reviews <span>{{ count($classes->reviews) }}</span>
                            </div>
                            <div class="comment-list">
                                <!-- Comment -->
                                @foreach($classes->reviews as $review)
                                    <div class="comment" id="comment-1">
                                        <div class="image"><img alt="" src="{{ $review->user?->image }}" class="avatar">
                                        </div>
                                        <div class="text">
                                            <div class="product-rate">
                                                @for($i = 0; $i < $classes->averageReviews(); $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                            <h5 class="name">{{ $review->user->name }}</h5>
                                            <span class="comment_date">{{ Carbon\Carbon::parse($review->created_at)->format('d M Y H:i') }}</span>
                                            <div class="text_holder">
                                                <p>{{ $review->text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- end: Comment -->
                            </div>
                        </div>
                        <!-- end: Product additional tabs -->
                    </div>
                </div>
                <!-- end: Content-->
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--Tabs with Posts-->
                    <div class="widget ">
                        <h4 class="widget-title">Recent Posts</h4>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/5.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">A true story, that never been told!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">Lorem ipsum dolor sit amet</a>
                                    <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End: Tabs with Posts-->
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
@endsection
