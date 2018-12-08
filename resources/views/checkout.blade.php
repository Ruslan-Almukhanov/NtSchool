@extends('layout')

@section('content')
<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">Checkout</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="shoping">Shop</a>
                    </li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
    <div class="container">

        <div class="row">

            <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">

                <div class="shop-info">Returning customer?
                    <a data-toggle="collapse" href="#registeredForm" aria-expanded="false" aria-controls="registeredForm">Click here to login</a>
                </div>

                <div class="collapse" id="registeredForm">
                    <form class="checkout with_border with_padding form-horizontal" role="form">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>

                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">
                                <span class="grey">Nick or email:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                <span class="grey">Password:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label for="rememberme" class="control-label">
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me
                                    </label>
                                </div>
                                <input type="submit" class="theme_button color1 topmargin_20" name="login" value="Login">
                                <div class="lost_password">
                                    <a href="#">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <h2>Billing Address</h2>

                <form class="form-horizontal checkout shop-checkout" role="form">
                    <div class="form-group">
                        <label for="billing_country" class="col-sm-3 control-label">
                            <span class="grey">Country:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="billing_country" id="billing_country">
                                <option value="">Select a country…</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB" selected="selected">United Kingdom (UK)</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group validate-required" id="billing_first_name_field">
                        <label for="billing_first_name" class="col-sm-3 control-label">
                            <span class="grey">First Name:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_first_name" id="billing_first_name" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group validate-required" id="billing_last_name_field">
                        <label for="billing_last_name" class="col-sm-3 control-label">
                            <span class="grey">Last Name:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_last_name" id="billing_last_name" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group" id="billing_company_field">
                        <label for="billing_company" class="col-sm-3 control-label">
                            <span class="grey">Company Name:</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_company" id="billing_company" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group address-field validate-required" id="billing_address_fields">
                        <label for="billing_address_1" class="col-sm-3 control-label">
                            <span class="grey">Address:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_address_1" id="billing_address_1" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="text" class="form-control " name="billing_address_2" id="billing_address_2" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group address-field validate-required" id="billing_city_field">
                        <label for="billing_city" class="col-sm-3 control-label">
                            <span class="grey">Town / City:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_city" id="billing_city" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group address-field validate-state" id="billing_state_field">
                        <label for="billing_state" class="col-sm-3 control-label">
                            <span class="grey">County:</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " value="" placeholder="" name="billing_state" id="billing_state">
                        </div>
                    </div>
                    <div class="form-group address-field validate-required validate-postcode" id="billing_postcode_field">
                        <label for="billing_postcode" class="col-sm-3 control-label">
                            <span class="grey">Postcode:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_postcode" id="billing_postcode" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group validate-required validate-email" id="billing_email_field">
                        <label for="billing_email" class="col-sm-3 control-label">
                            <span class="grey">Email Address:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_email" id="billing_email" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group validate-required validate-phone" id="billing_phone_field">
                        <label for="billing_phone" class="col-sm-3 control-label">
                            <span class="grey">Phone:</span>
                            <span class="required">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " name="billing_phone" id="billing_phone" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Create an Account?
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Shop to Billing Address?
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="order_comments" class="col-sm-3 control-label">
                            <span class="grey">Order Notes:</span>
                        </label>
                        <div class="col-sm-9">
                            <textarea name="order_comments" class="form-control" id="order_comments" placeholder="" rows="5"></textarea>
                        </div>
                    </div>
                </form>

            </div>
            <!--eof .col-sm-8 (main content)-->


            <!-- sidebar -->
            <aside class="col-sm-5 col-md-4 col-lg-3 col-sm-pull-7 col-md-pull-8 col-lg-pull-9">

                <h3 class="widget-title" id="order_review_heading">Your order</h3>
                <div id="order_review" class="shop-checkout-review-order">
                    <table class="table shop_table shop-checkout-review-order-table">
                        <thead>
                        <tr>
                            <td class="product-name">Product</td>
                            <td class="product-total">Total</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="cart_item">
                            <td class="product-name">
                                Lipsum Sit
                                <span class="product-quantity">× 1</span>
                            </td>
                            <td class="product-total">
                                <span class="amount grey">$20.00</span>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>

                        <tr class="cart-subtotal">
                            <td>Subtotal:</td>
                            <td>
                                <span class="amount grey">$20.00</span>
                            </td>
                        </tr>

                        <tr class="shipping">
                            <td>Shipping:</td>
                            <td>
                                <span class="grey">Free Shipping</span>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <td>Total:</td>
                            <td>
												<span class="amount grey">
													<strong>$20.00</strong>
												</span>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                    <div id="payment" class="shop-checkout-payment">
                        <h3 class="widget-title">Payment</h3>
                        <ul class="list1 no-bullets payment_methods methods">
                            <li class="payment_method_bacs">
                                <div class="radio">
                                    <label for="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" name="payment_method" value="bacs" checked="checked">
                                        <span class="grey">Direct Bank Transfer</span>
                                    </label>
                                </div>

                                <div class="payment_box payment_method_bacs">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </li>
                            <li class="payment_method_cheque">

                                <div class="radio">
                                    <label for="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" name="payment_method" value="cheque">
                                        <span class="grey">Cheque Payment</span>
                                    </label>
                                </div>

                            </li>
                            <li class="payment_method_paypal">

                                <div class="radio">
                                    <label for="payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" name="payment_method" value="paypal">
                                        <span class="grey">PayPal</span>

                                    </label>
                                </div>

                            </li>
                        </ul>

                        <div class="place-order">
                            <input type="submit" class="theme_button color1" name="checkout_place_order" id="place_order" value="Place order">
                        </div>
                    </div>
                </div>

            </aside>
            <!-- eof aside sidebar -->


        </div>
    </div>
</section>
@endsection