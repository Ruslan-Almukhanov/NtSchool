@extends('layout')

@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Registration</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li class="active">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <div class="row">

                <form class="shop-register" role="form" method="POST" action="/registration">

                    <div class="col-sm-6">
                        <div class="form-group validate-required" id="billing_first_name_field">
                        @if($messages !== null && $messages->has('name'))
                            @foreach($messages->get('name') as $message)
                                <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_first_name" class="control-label">
                                <span class="grey">First Name:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="name" id="billing_first_name" placeholder="" value="@if(isset($name)){{ $name }}@elseif(isset($user)){{ $user->first_name }}@endif">
                        </div>
                        <div class="form-group validate-required" id="billing_last_name_field">
                            @if($messages !== null && $messages->has('last_name'))
                                @foreach($messages->get('last_name') as $message)
                                    <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_last_name" class="control-label">
                                <span class="grey">Last Name:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="last_name" id="billing_last_name" placeholder="" value="@if(isset($last_name)){{ $last_name }}@elseif(isset($user)){{ $user->last_name }}@endif">

                        </div>
                        <div class="form-group validate-required validate-email" id="billing_email_field">
                            @if($messages !== null && $messages->has('email'))
                                @foreach($messages->get('email') as $message)
                                    <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_email" class="control-label">
                                <span class="grey">Email Address:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="email" id="billing_email" placeholder="" value="@if(isset($email)){{ $email }}@elseif(isset($user)){{ $user->email }}@endif">

                        </div>
                        <div class="form-group validate-required validate-phone" id="billing_phone_field">
                            @if($messages !== null && $messages->has('phone'))
                                @foreach($messages->get('phone') as $message)
                                    <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_phone" class="control-label">
                                <span class="grey">Phone:</span>
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control " name="phone" id="billing_phone" placeholder="" value="@if(isset($phone)){{ $phone }}@elseif(isset($user)){{ $user->phone }}@endif">
                        </div>
                        <div class="form-group" id="billing_password_field">
                            @if($messages !== null && $messages->has('password'))
                                @foreach($messages->get('password') as $message)
                                    <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_password" class="control-label">
                                <span class="grey">Password:</span>
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control " name="password" id="billing_password" placeholder="" value="">
                        </div>
                        <div class="form-group" id="billing_password2_field">
                            @if($messages !== null && $messages->has('password_confirmation'))
                                @foreach($messages->get('password_confirmation') as $message)
                                    <p style="color:red">{{ $message }}</p>
                                @endforeach
                            @endif
                            <label for="billing_password2" class="control-label">
                                <span class="grey">Confirm Password:</span>
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control " name="password_confirmation" id="billing_password2" placeholder="" value="">
                        </div>

                        {{--<div class="form-group" id="billing_company_field">--}}
                            {{--<label for="billing_company" class="control-label">--}}
                                {{--<span class="grey">Company Name:</span>--}}
                            {{--</label>--}}

                            {{--<input type="text" class="form-control " name="billing_company" id="billing_company" placeholder="" value="">--}}

                        {{--</div>--}}


                    </div>

                    <div class="col-sm-6">




                    </div>

                    {{--<div class="col-sm-12">--}}
                        {{--<div class="form-group address-field validate-required" id="billing_address_fields">--}}
                            {{--<label for="billing_address_1" class="control-label">--}}
                                {{--<span class="grey">Address:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}

                            {{--<input type="text" class="form-control " name="billing_address_1" id="billing_address_1" placeholder="" value="">--}}

                        {{--</div>--}}

                    {{--</div>--}}
                    <div class="col-sm-6">
                        {{--<div class="form-group address-field validate-required" id="billing_city_field">--}}
                            {{--<label for="billing_city" class="control-label">--}}
                                {{--<span class="grey">Town / City:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<input type="text" class="form-control " name="billing_city" id="billing_city" placeholder="" value="">--}}
                        {{--</div>--}}
                        {{--<div class="form-group address-field validate-required validate-postcode" id="billing_postcode_field">--}}
                            {{--<label for="billing_postcode" class="control-label">--}}
                                {{--<span class="grey">Postcode:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<input type="text" class="form-control " name="billing_postcode" id="billing_postcode" placeholder="" value="">--}}
                        {{--</div>--}}


                        {{--<div class="form-group">--}}
                            {{--<div class="radio">--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="optionsRadios"> Ship to this address--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="radio">--}}
                                {{--<label>--}}
                                    {{--<input type="radio" name="optionsRadios"> Ship to different address--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-sm-6">
                        {{--<div class="form-group">--}}
                            {{--<label for="billing_state" class="control-label">--}}
                                {{--<span class="grey">State/Province:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<select class="form-control" name="billing_state" id="billing_state">--}}
                                {{--<option value="">Select a country…</option>--}}
                                {{--<option value="AX">Åland Islands</option>--}}
                                {{--<option value="AF">Afghanistan</option>--}}
                                {{--<option value="AL">Albania</option>--}}
                                {{--<option value="GA">Gabon</option>--}}
                                {{--<option value="GM">Gambia</option>--}}
                                {{--<option value="GE">Georgia</option>--}}
                                {{--<option value="DE">Germany</option>--}}
                                {{--<option value="GH">Ghana</option>--}}
                                {{--<option value="AE">United Arab Emirates</option>--}}
                                {{--<option value="GB" selected="selected">United Kingdom (UK)</option>--}}
                                {{--<option value="ZW">Zimbabwe</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="billing_country" class="control-label">--}}
                                {{--<span class="grey">Country:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<select class="form-control" name="billing_country" id="billing_country">--}}
                                {{--<option value="">Select a country…</option>--}}
                                {{--<option value="AX">Åland Islands</option>--}}
                                {{--<option value="AF">Afghanistan</option>--}}
                                {{--<option value="AL">Albania</option>--}}
                                {{--<option value="GA">Gabon</option>--}}
                                {{--<option value="GM">Gambia</option>--}}
                                {{--<option value="GE">Georgia</option>--}}
                                {{--<option value="DE">Germany</option>--}}
                                {{--<option value="GH">Ghana</option>--}}
                                {{--<option value="AE">United Arab Emirates</option>--}}
                                {{--<option value="GB" selected="selected">United Kingdom (UK)</option>--}}
                                {{--<option value="ZW">Zimbabwe</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="form-group validate-required validate-fax" id="billing_fax_field">--}}
                            {{--<label for="billing_fax" class="control-label">--}}
                                {{--<span class="grey">Fax:</span>--}}
                                {{--<span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<input type="text" class="form-control " name="billing_fax" id="billing_fax" placeholder="" value="">--}}
                        {{--</div>--}}

                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>
                        <button type="reset" class="theme_button wide_button">Clear Form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection