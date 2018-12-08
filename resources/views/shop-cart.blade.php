@extends('layout')

@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Cart</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">

                    <div class="table-responsive">
                        <table class="table shop_table cart cart-table">
                            <thead>
                            <tr>
                                <td class="product-info">Product</td>
                                <td class="product-price-td">Price</td>
                                <td class="product-quantity">Quantity</td>
                                <td class="product-subtotal">Subtotal</td>
                                <td class="product-remove">&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart_item">
                                <td class="product-info">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="shop-product-right.html">
                                                <img class="media-object cart-product-image" src="images/shop/01.png" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="shop-product-right.html">At vero eos et accusam</a>
                                            </h4>
                                            <span class="grey">Color:</span> Black
                                            <br>
                                            <span class="grey">Size:</span> M
                                        </div>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="currencies">$</span>
                                    <span class="amount">199.00</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="currencies">$</span>
                                    <span class="amount">199.00</span>
                                </td>
                                <td class="product-remove">
                                    <a href="#" class="remove fontsize_20" title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr class="cart_item">
                                <td class="product-info">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="shop-product-right.html">
                                                <img class="media-object cart-product-image" src="images/shop/02.png" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="shop-product-right.html">Justo duo dolores et ea rebum</a>
                                            </h4>
                                            <span class="grey">Size:</span> XL
                                        </div>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="currencies">$</span>
                                    <span class="amount">100.00</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="currencies">$</span>
                                    <span class="amount">100.00</span>
                                </td>
                                <td class="product-remove">
                                    <a href="#" class="remove fontsize_20" title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <a class="theme_button" href="#">Countinue Shopping</a>

                        <input type="submit" class="theme_button color1" name="update_cart" value="Update Cart">

                        <button type="submit" class="theme_button color2">Proceed to Checkout</button>
                    </div>

                    <div class="cart-collaterals">
                        <div class="cart_totals">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <td>Cart Subtotal</td>
                                    <td>
                                        <span class="currencies">$</span>
                                        <span class="amount">299.00</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <td>Shipping and Handling</td>
                                    <td>
                                        Free Shipping
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td class="grey">Order Total</td>
                                    <td>
                                        <strong class="grey">
                                            <span class="currencies">$</span>
                                            <span class="amount">299.00</span>
                                        </strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="coupon with_padding with_shadow">
                                <h3 class="topmargin_0">Discount Codes</h3>
                                <p>Enter coupon code if you have one</p>
                                <div class="form-group">
                                    <label class="sr-only" for="coupon_code">Coupon:</label>
                                    <input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
                                </div>
                                <a class="theme_button" href="#">Apply Coupon</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shipping-calculator-form with_padding with_shadow">
                                <h3 class="topmargin_0">Shipping &amp; Tax</h3>
                                <p>Enter destination to get shipping</p>
                                <div class="form-group">
                                    <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state form-control">
                                        <option value="">Select a country…</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="OM">Oman</option>
                                        <option value="GB" selected="selected">United Kingdom (UK)</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" placeholder="Postcode / Zip" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                </div>
                                <div>
                                    <button type="submit" name="calc_shipping" class="theme_button" value="1">Update Totals</button>
                                </div>
                            </div>
                        </div>

                    </div>

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