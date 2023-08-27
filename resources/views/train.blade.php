@extends('app')
@section('content')
    <section id="page-content" class="sidebar-both">
        <div class="container">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar col-lg-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Product categories</h4>
                        <ul class="list list-lines">
                            <li><a href="#">Bags</a> <span class="count">(6)</span>
                            </li>
                            <li><a href="#">Jeans</a> <span class="count">(8)</span>
                            </li>
                            <li><a href="#">Shoes</a> <span class="count">(7)</span>
                            </li>
                            <li><a href="#">Sweaters</a> <span class="count">(7)</span>
                            </li>
                            <li><a href="#">T-Shirts</a> <span class="count">(9)</span>
                            </li>
                            <li><a href="#">Tops</a> <span class="count">(10)</span>
                            </li>
                            <li><a href="#">Women</a> <span class="count">(25)</span>
                            </li>
                        </ul>
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
                    <div class="widget clearfix widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            <a href="#">Design</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Digital</a>
                            <a href="#">Branding</a>
                            <a href="#">HTML</a>
                            <a href="#">Clean</a>
                            <a href="#">Peace</a>
                            <a href="#">Love</a>
                            <a href="#">CSS3</a>
                            <a href="#">jQuery</a>
                        </div>
                    </div>
                    <div class="widget clearfix widget-newsletter">
                        <form class="form-inline" method="get" action="#">
                            <h4 class="widget-title">Subscribe for Latest Offers</h4>
                            <small>Subscribe to our Newsletter to get Sales Offers &amp; Coupon Codes etc.</small>
                            <div class="input-group">
                                <input type="email" placeholder="Enter your Email" class="form-control required email" name="widget-subscribe-form-email" aria-required="true">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                                    </span>
                            </div>
                        </form>
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6>Select the size</h6>
                                        <ul class="product-size">
                                            <li>
                                                <label>
                                                    <input type="radio" checked="checked" value="option1" name="product-size"><span>xs</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" checked="checked" value="option1" name="product-size"><span>s</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" checked="checked" value="option1" name="product-size"><span>m</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" checked="checked" value="option1" name="product-size"><span>l</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" checked="checked" value="option1" name="product-size"><span>xl</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6>Select the color</h6>
                                        <label class="sr-only">Color</label>
                                        <select style="padding:10px">
                                            <option value="">Select color…</option>
                                            <option value="">White</option>
                                            <option value="" selected="selected">Green</option>
                                            <option value="">Brown</option>
                                            <option value="">Yellow</option>
                                            <option value="">Pink</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6>Select quantity</h6>
                                        <div class="cart-product-quantity">
                                            <div class="quantity m-l-5">
                                                <input type="button" class="minus" value="-">
                                                <input type="text" class="qty" value="1">
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6>Add to Cart</h6>
                                        <a class="btn" href="#"><i class="icon-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product additional tabs -->
                        <div class="tabs tabs-folder">
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>Description</a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="true"><i class="fa fa-info"></i>Additional Info</a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-star"></i>Reviews</a></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                                <div class="tab-pane fade active show" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>Small, Medium &amp; Large</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Pink &amp; White</td>
                                        </tr>
                                        <tr>
                                            <td>Waist</td>
                                            <td>26 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>40 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>33 inches</td>
                                        </tr>
                                        <tr>
                                            <td>Fabric</td>
                                            <td>Cotton, Silk &amp; Synthetic</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>3 Months</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="comments" id="comments">
                                        <div class="comment_number">
                                            Reviews <span>(3)</span>
                                        </div>
                                        <div class="comment-list">
                                            <!-- Comment -->
                                            <div class="comment" id="comment-1">
                                                <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <div class="product-rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                            <!-- Comment -->
                                            <div class="comment" id="comment-1-1">
                                                <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <div class="product-rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                            <!-- Comment -->
                                            <div class="comment" id="comment-1-2">
                                                <div class="image"><img alt="" src="images/blog/author3.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <div class="product-rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                        </div>
                                    </div>
                                </div>
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
                    <!-- Twitter widget -->
                    <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                        <h4 class="widget-title">Recent Tweets</h4>
                    </div>
                    <!-- end: Twitter widget-->
                    <!--widget tags -->
                    <div class="widget  widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            <a href="#">Design</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Digital</a>
                            <a href="#">Branding</a>
                            <a href="#">HTML</a>
                            <a href="#">Clean</a>
                            <a href="#">Peace</a>
                            <a href="#">Love</a>
                            <a href="#">CSS3</a>
                            <a href="#">jQuery</a>
                        </div>
                    </div>
                    <!--end: widget tags -->
                    <!--widget newsletter-->
                    <div class="widget  widget-newsletter">
                        <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                            <h4 class="widget-title">Newsletter</h4>
                            <small>Stay informed on our latest news!</small>
                            <div class="input-group">
                                <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
                                        <button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
                                    </span> </div>
                        </form>
                    </div>
                    <!--end: widget newsletter-->
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
@endsection
