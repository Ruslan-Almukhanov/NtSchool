@extends('layout')
@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Contacts</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_100 background_cover page_contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                    <div class="ds with_background transp_black_bg with_padding">

                        <form class="contact-form row columns_padding_10" method="post" action="./">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-flag highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                    <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 bottommargin_0">

                                <div class="contact-form-submit topmargin_10">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color3 wide_button margin_0">Send Now</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs main_color3 section_padding_top_40 section_padding_bottom_40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Call us today:</span>
                            <br>
                            <span class="fontsize_20 medium black">8 800 269 8469</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Our Location:</span>
                            <br>
                            <span class="fontsize_20 medium black">253 Adams Ave, Iowa</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Open Hours:</span>
                            <br>
                            <span class="fontsize_20 medium black">Mon - Sat 8am - 6pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection