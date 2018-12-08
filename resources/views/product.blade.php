@extends('layout')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
    @endpush
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Single Product</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="shoping">Shop</a>
                        </li>
                        <li class="active">Single Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">

                    <div class="with_shadow with_padding rounded">


                        <div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">

                            <div class="col-md-6">
                                <div class="images">

                                    <span class="newproduct">New</span>

                                    <span class="onsale">Sale!</span>

                                    <a href="http://wpsolar/wp-content/uploads/2013/06/poster_2_up.jpg" itemprop="image" class="woocommerce-main-image zoom" data-rel="prettyPhoto[product-gallery]">
                                        <img src="images/shop/01.png" class="attachment-shop_single wp-post-image with_background" alt="" title="">
                                    </a>
                                </div>
                                <!--eof .images -->
                                <div class="thumbnails-wrap text-center">
                                    <div id="product-thumbnails" class="owl-carousel thumbnails product-thumbnails" data-loop="true" data-center="true" data-margin="10" data-nav="false" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2"
                                         data-responsive-xs="2">

                                        <a href="images/shop/02.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                            <img src="images/shop/02.png" class="attachment-shop_thumbnail with_background" alt="">
                                        </a>

                                        <a href="images/shop/03.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                            <img src="images/shop/03.png" class="attachment-shop_thumbnail with_background" alt="">
                                        </a>

                                        <a href="images/shop/04.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                            <img src="images/shop/04.png" class="attachment-shop_thumbnail with_background" alt="">
                                        </a>

                                        <a href="images/shop/05.png" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
                                            <img src="images/shop/05.png" class="attachment-shop_thumbnail with_background" alt="">
                                        </a>

                                    </div>

                                </div>
                                <!-- eof .images -->
                            </div>

                            <div class="summary entry-summary col-md-6">

                                <h1 itemprop="name" class="product_title entry-title">{{ $products->title }}</h1>

                                <div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">

                                    <div class="star-rating" title="Rated 4.50 out of 5">
												<span style="width:90%">
													<strong class="rating">4.50</strong> out of 5
												</span>
                                    </div>

                                    <div class="review-links darklinks">
                                        <a href="#comments" class="review-link" rel="nofollow">
                                            <span itemprop="reviewCount" class="count">3</span> review(s)
                                        </a>

                                        <span class="grey"> | </span>

                                        <a href="#respond" class="review-link" rel="nofollow">
                                            Add Review
                                        </a>
                                    </div>

                                </div>

                                <div class="product_meta">
											<span class="posted_in">
												<span class="grey">Categories:</span>
												<span class="categories-links small-text">
													<a rel="category" href="shop-right.html">Product Cat</a>
												</span>
											</span>
                                </div>

                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                                    <div itemprop="description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>

                                    <ul class="list1 no-bullets">
                                        <li>
                                            <p class="price">
                                                <del>
                                                    <span class="amount">${{ $products->old_price }}</span>
                                                </del>
                                                <ins>
                                                    <span class="amount">${{ $products->price }}</span>
                                                </ins>
                                            </p>

                                            <meta itemprop="price" content="2">

                                            <meta itemprop="priceCurrency" content="USD">

                                            <link itemprop="availability" href="http://schema.org/InStock">

                                            <p class="stock"><span class="grey">Availability:</span> In Stock</p>
                                            <!-- <p class="stock out-of-stock"><span class="grey">Availability:</span> <span class="highlight">Out Of Stock</span></p> -->

                                            <div class="email-to darklinks">
                                                <a href="#" class="email-to-link" rel="nofollow">
                                                    Email to a Friend
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="product_size" class="grey">Size</label>
                                            <span class="red">*</span>
                                            <select class="form-control" id="product_size">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <span class="product-option-name grey">Color</span>
                                        <span class="red">*</span>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Grey
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Magenta
                                            </label>
                                        </div>

                                        <span class="product-option-name grey">Other Options</span>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value=""> Option one
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value=""> Option two
                                            </label>
                                        </div>


                                        <span class="product-option-name grey">Select Delivery Date</span>

                                        <div class="form-inline">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="" selected="">-</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="" selected="">-</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="" selected="">-</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                </select>
                                            </div>
                                        </div>

                                        <span class="product-option-name grey">Additional Comment</span>

                                        <textarea class="form-control" rows="3"></textarea>
                                        <p>Maximum number of characters: <span id="char_left">500</span></p>

                                        <div class="pull-right">
                                            <a href="#" rel="nofollow" class="theme_button color1 add_to_cart_button">
                                                <i class="rt-icon2-basket"></i>
                                                Buy
                                            </a>
                                        </div>

                                        <label class="grey" for="product_quantity">Qty:</label>

                                        <span class="quantity form-group">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" id="product_quantity" class="form-control ">
													<input type="button" value="+" class="plus">
												</span>

                                    </form>
                                </div>


                            </div>
                            <!-- .summary.col- -->

                        </div>
                        <!-- .product.row -->


                    </div>
                    <!-- .with_background -->


                    <div class="woocommerce-tabs">


                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs wc-tabs" role="tablist">
                            <li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Details</a></li>
                            <li><a href="#additional_tab" role="tab" data-toggle="tab">Additional</a></li>
                            <li><a href="#reviews_tab" role="tab" data-toggle="tab">Reviews</a></li>
                            <li><a href="#custom_tab" role="tab" data-toggle="tab">Custom</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content top-color-border">

                            <div class="tab-pane fade in active" id="details_tab">

                                <p>Duis autem veiudolorn hendrerit vulputate velit esse molestie. consequat, vel illum dolore eu feugiat nulla facilisis at vereros accumsan etiusto dignissim:</p>

                                <ul class="list1 darklinks">
                                    <li>
                                        <a href="#">Lorem ipsum dolor sit amet</a>
                                    </li>
                                    <li>
                                        <a href="#">Sint animi non ut sed</a>
                                    </li>
                                    <li>
                                        <a href="#">Eaque blanditiis nemo</a>
                                    </li>
                                    <li>
                                        <a href="#">Amet, consectetur adipisicing</a>
                                    </li>
                                    <li>
                                        <a href="#">Blanditiis nemo quaerat</a>
                                    </li>
                                </ul>

                                <div class="well">
                                    <strong class="highlight">Warning!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>

                            </div>

                            <div class="tab-pane fade" id="additional_tab">

                                <table class="table table-striped topmargin_30">

                                    <tr>
                                        <th class="grey">Product title:</th>
                                        <td>Product Name</td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Item SKU:</th>
                                        <td>5552281538</td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Brand:</th>
                                        <td><a href="#">Brand Name</a></td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Style:</th>
                                        <td>SuperStyle</td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Size:</th>
                                        <td>Middle</td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Color:</th>
                                        <td>Black</td>
                                    </tr>

                                    <tr>
                                        <th class="grey">Targeted Group:</th>
                                        <td>All</td>
                                    </tr>

                                </table>

                            </div>

                            <div class="tab-pane fade" id="reviews_tab">

                                <div class="comments-area" id="comments">
                                    <ol class="comment-list">
                                        <li class="comment even thread-even depth-1 parent">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="images/team/05.jpg">
                                                </div>
                                                <div class="media-body">
															<span class="reply greylinks">
																<a href="#respond">
																	<i class="fa fa-reply"></i>
																</a>
															</span>
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                        <span class="comment-date">
																	<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
																</span>
                                                    </div>
                                                    <div class="comment-rating">
                                                        <span class="grey">Customer Rating: </span>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
																	<span style="width:90%">
																		<strong class="rating">4.50</strong> out of 5
																	</span>
                                                        </div>
                                                    </div>
                                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->

                                            <ol class="children">
                                                <li class="comment byuser odd alt depth-2 parent">
                                                    <article class="comment-body media">
                                                        <div class="media-left">
                                                            <img class="media-object" alt="" src="images/team/03.jpg">
                                                        </div>
                                                        <div class="media-body">
																	<span class="reply greylinks">
																		<a href="#respond">
																			<i class="fa fa-reply"></i>
																		</a>
																	</span>
                                                            <div class="comment-meta darklinks">
                                                                <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                                <span class="comment-date">
																			<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
																		</span>
                                                            </div>
                                                            <div class="comment-rating">
                                                                <span class="grey">Customer Rating: </span>
                                                                <div class="star-rating" title="Rated 4.50 out of 5">
																			<span style="width:90%">
																				<strong class="rating">4.50</strong> out of 5
																			</span>
                                                                </div>
                                                            </div>
                                                            <p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        </div>
                                                    </article>
                                                    <!-- .comment-body -->

                                                    <ol class="children">
                                                        <li class="comment byuser even depth-3">
                                                            <article class="comment-body media">
                                                                <div class="media-left">
                                                                    <img class="media-object" alt="" src="images/team/01.jpg">
                                                                </div>
                                                                <div class="media-body">
																			<span class="reply greylinks">
																				<a href="#respond">
																					<i class="fa fa-reply"></i>
																				</a>
																			</span>
                                                                    <div class="comment-meta darklinks">
                                                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                                        <span class="comment-date">
																					<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
																				</span>
                                                                    </div>
                                                                    <div class="comment-rating">
                                                                        <span class="grey">Customer Rating: </span>
                                                                        <div class="star-rating" title="Rated 4.50 out of 5">
																					<span style="width:90%">
																						<strong class="rating">4.50</strong> out of 5
																					</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>Third Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                </div>
                                                            </article>
                                                            <!-- .comment-body -->
                                                        </li>
                                                        <!-- #comment-## -->
                                                    </ol>
                                                    <!-- .children -->
                                                </li>
                                                <!-- #comment-## -->
                                            </ol>
                                            <!-- .children -->
                                        </li>
                                        <!-- #comment-## -->

                                        <li class="comment byuser odd alt thread-odd thread-alt depth-1">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="images/team/02.jpg">
                                                </div>
                                                <div class="media-body">
															<span class="reply greylinks">
																<a href="#respond">
																	<i class="fa fa-reply"></i>
																</a>
															</span>
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                        <span class="comment-date">
																	<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
																</span>
                                                    </div>
                                                    <div class="comment-rating">
                                                        <span class="grey">Customer Rating: </span>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
																	<span style="width:90%">
																		<strong class="rating">4.50</strong> out of 5
																	</span>
                                                        </div>
                                                    </div>
                                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->
                                        </li>
                                        <!-- #comment-## -->

                                        <li class="comment byuser even thread-even depth-1">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="images/team/04.jpg">
                                                </div>
                                                <div class="media-body">
															<span class="reply greylinks">
																<a href="#respond">
																	<i class="fa fa-reply"></i>
																</a>
															</span>
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Alan Smith</a>
                                                        <span class="comment-date">
																	<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
																</span>
                                                    </div>
                                                    <div class="comment-rating">
                                                        <span class="grey">Customer Rating: </span>
                                                        <div class="star-rating" title="Rated 4.50 out of 5">
																	<span style="width:90%">
																		<strong class="rating">4.50</strong> out of 5
																	</span>
                                                        </div>
                                                    </div>
                                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>
                                    <!-- .comment-list -->
                                </div>
                                <!-- #comments -->

                                <div class="comment-respond" id="respond">
                                    <h3>Write Your Own Review</h3>
                                    <div>
                                        <span class="grey">Your rating:</span>
                                        <p class="stars">
                                            <a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a>
                                        </p>
                                    </div>

                                    <form class="comment-form" id="commentform" method="post" action="./">
                                        <div class="row columns_margin_bottom_30">
                                            <div class="col-md-6">
                                                <p class="comment-form-author">
                                                    <label for="author">Name <span class="required">*</span></label>
                                                    <!-- <i class="rt-icon2-user-outline"></i> -->
                                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control" placeholder="Full Name">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="comment-form-email">
                                                    <label for="comment_email">Email <span class="required">*</span></label>
                                                    <!-- <i class="rt-icon2-mail2"></i> -->
                                                    <input type="email" aria-required="true" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Email Address">
                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="comment-form-chat">
                                                    <label for="comment">Comment</label>
                                                    <!-- <i class="rt-icon2-pencil3"></i> -->
                                                    <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment" class="form-control" placeholder="Review"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="form-submit">
                                            <button type="submit" id="submit" name="submit" class="theme_button wide_button color1">Submit Review</button>
                                            <button type="reset" id="reset" class="theme_button wide_button">Clear Form</button>
                                        </p>
                                    </form>
                                </div>
                                <!-- #respond -->

                            </div>

                            <div class="tab-pane fade" id="custom_tab">

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>

                            </div>

                        </div>
                        <!-- eof .tab-content -->
                    </div>
                    <!-- .woocommerce-tabs -->


                </div>
                <!--eof .col-sm-8 (main content)-->


                <!-- sidebar -->
                <aside class="col-sm-5 col-md-4 col-lg-3 col-sm-pull-7 col-md-pull-8 col-lg-pull-9">

                    <div class="widget widget_price_filter">

                        <h3 class="widget-title poppins">Filter by Price</h3>
                        <!-- price slider -->
                        <form method="get" action="./" class="form-inline">

                            <div class="slider-range-price"></div>

                            Price:

                            <div class="form-group">
                                <label for="slider_price_min" class="slider_price_min_label">0</label>
                                <input type="text" class="slider_price_min form-control text-center" id="slider_price_min" readonly>
                            </div>

                            -

                            <div class="form-group">
                                <label for="slider_price_max" class="slider_price_max_label">0</label>
                                <input type="text" class="slider_price_max form-control text-center" id="slider_price_max" readonly>
                            </div>

                            <div class="topmargin_20">
                                <button type="submit" class="theme_button wide_button color1">Filter</button>
                            </div>
                        </form>
                    </div>

                    <div class="widget widget_shopping_cart">

                        <h3 class="widget-title poppins">Your Cart</h3>
                        <div class="widget_shopping_cart_content">

                            <ul class="cart_list product_list_widget media-list darklinks">

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <a href="shop-product-right.html">
                                            <img src="images/shop/03.png" class="with_background" alt="">
                                        </a>
                                    </div>

                                    <div class="media-body media-middle">
                                        <h4>
                                            <a href="shop-product-right.html">At vero eos accusam</a>
                                        </h4>
                                        <span class="quantity bold">1 ×
													<span class="amount highlight">$49.95</span>
												</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <a href="shop-product-right.html">
                                            <img src="images/shop/04.png" class="with_background" alt="">
                                        </a>
                                    </div>

                                    <div class="media-body media-middle">
                                        <h4>
                                            <a href="shop-product-right.html">At vero eos accusam</a>
                                        </h4>
                                        <span class="quantity bold">2 ×
													<span class="amount highlight">$29.99</span>
												</span>
                                    </div>
                                </li>

                            </ul>
                            <!-- end product list -->

                            <p class="buttons topmargin_40">
                                <a href="shop-cart-right.html" class="theme_button color1 margin_0">View cart</a>
                                <!-- <a href="shop-checkout-right.html" class="theme_button">Checkout</a> -->
                            </p>

                        </div>
                    </div>

                    <div class="widget widget_categories">

                        <h3 class="widget-title poppins">All Categories</h3>
                        <ul class="greylinks">
                            <li>
                                <a href="blog-right.html" title="">Brisket turkey jerky</a>
                            </li>
                            <li>
                                <a href="blog-right.html" title="">Pig ham shank strip</a>
                            </li>
                            <li>
                                <a href="blog-right.html" title="">Beef picanha venison</a>
                            </li>
                            <li>
                                <a href="blog-right.html" title="">Picanha spare ribs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_tabs widget_theme_post_tabs">


                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#widget-tab4" role="tab" data-toggle="tab">Popular</a></li>
                            <li><a href="#widget-tab5" role="tab" data-toggle="tab">Recent</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content top-color-border">


                            <div class="tab-pane fade in active" id="widget-tab4">
                                <ul class="cart_list product_list_widget media-list darklinks">
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/01.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">At vero eos accusam</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$49.95</span>
													</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/02.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">Lorem Ipsum amet</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$29.99</span>
													</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/03.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">Nam libero tempore</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$36.56</span>
													</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- eof tab -->


                            <div class="tab-pane fade" id="widget-tab5">
                                <ul class="cart_list product_list_widget media-list darklinks">
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/04.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">Et harum quidem</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$49.95</span>
													</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/05.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">Neque porro quisquam</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$29.99</span>
													</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="shop-product-right.html">
                                                <img src="images/shop/06.png" class="with_background" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="shop-product-right.html">Quis autem vel eum</a>
                                            </h4>
                                            <span class="quantity bold">
														<span class="amount highlight">$36.56</span>
													</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- eof tab -->


                            <div class="tab-pane fade" id="widget-tab6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="images/gallery/01.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="blog-single-left.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h4>
                                            <a href="blog-single-right.html">Consetetur elitr</a>
                                        </h4>
                                        <p class="item-meta greylinks">
                                            By <a href="#">Admin</a> on Jan 18, 2017
                                            <span class="pull-right"><i class="rt-icon2-heart-outline highlight"></i> 53</span>
                                        </p>

                                    </div>
                                </div>

                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="images/gallery/03.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="blog-single-left.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h4>
                                            <a href="blog-single-right.html">Elitr onsetetur sadip</a>
                                        </h4>
                                        <p class="item-meta greylinks">
                                            By <a href="#">Admin</a> on Jan 18, 2017
                                            <span class="pull-right"><i class="rt-icon2-heart-outline highlight"></i> 631</span>
                                        </p>

                                    </div>
                                </div>


                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="images/gallery/02.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="blog-single-left.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h4>
                                            <a href="blog-single-right.html">Lorem sadipscing elitr</a>
                                        </h4>
                                        <p class="item-meta greylinks">
                                            By <a href="#">Admin</a> on Jan 18, 2017
                                            <span class="pull-right"><i class="rt-icon2-heart-outline highlight"></i> 221</span>
                                        </p>

                                    </div>
                                </div>


                            </div>
                            <!-- eof tab -->

                        </div>
                        <!-- eof tab-content -->

                    </div>
                    <!-- eof widget -->


                </aside>
                <!-- eof aside sidebar -->


            </div>
        </div>
    </section>
@endsection