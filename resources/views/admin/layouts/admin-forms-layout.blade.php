<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Pet Salon</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="/css/dashboard.css" class="color-switcher-link">
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body class="admin">
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="../">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
    <!-- <div class="ls with_padding"> -->
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form class="with_padding contact-form" method="post" action="../">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Contact Admin</h3>
                        <div class="contact-form-name">
                            <label for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contact-form-subject">
                            <label for="subject">Subject
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="col-sm-12">

                        <div class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <div class="contact-form-submit">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
                            <button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

@yield('content')

    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->


<!-- chat -->
<div class="side-dropdown side-chat dropdown">
    <a class="side-button side-chat-button" id="chat-dropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-comments-o"></i>
    </a>

    <ul class="dropdown-menu list-unstyled" aria-labelledby="chat-dropdown">
        <li class="dropdown-title darkgrey_bg_color">
            <h4>
                Small Chat
                <span class="pull-right">14.03.2017</span>
            </h4>
        </li>
        <li>

            <ul class="list-unstyled">
                <li class="side-chat-item item-secondary">
                    <h5>
                        Michael Anderson
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:50
                        </time>
                    </h5>
                    <div class="danger_bg_color">
                        Duis autem veum iriure dolor in hendrerit
                    </div>
                </li>
                <li class="side-chat-item item-primary">
                    <h5>
                        Jane Walker
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:52
                        </time>
                    </h5>
                    <div class="warning_bg_color">
                        Vulputate vese molestie consequatl illum
                    </div>
                </li>
                <li class="side-chat-item item-secondary">
                    <h5>
                        Michael Anderson
                        <time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
                            08:50
                        </time>
                    </h5>
                    <div class="danger_bg_color">
                        Duis autem veum iriure dolor in hendrerit
                    </div>
                </li>
            </ul>
        </li>


        <li role="separator" class="divider"></li>

        <li>
            <div class="side-chat-answer">
                <form class="form-inline button-on-input">
                    <div class="form-group">
                        <label for="side-chat-message" class="sr-only">Message</label>
                        <input type="text" class="form-control" id="side-chat-message" placeholder="Message">
                    </div>
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-paper-plane-o"></i>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</div>
<!-- .chat-dropdown -->


<a class="side-button side-contact-button" data-target="#admin_contact_modal" href="#admin_contact_modal" data-toggle="modal" role="button">
    <i class="fa fa-envelope"></i>
</a>


<!-- template init -->
<script src="js/compressed.js"></script>
<script src="js/main.js"></script>

<!-- dashboard libs -->

<!-- events calendar -->
<script src="/js/admin/moment.min.js"></script>
<script src="/js/admin/fullcalendar.min.js"></script>
<!-- range picker -->
<script src="/js/admin/daterangepicker.js"></script>

<!-- charts -->
<script src="/js/admin/Chart.bundle.min.js"></script>
<!-- vector map -->
<script src="/js/admin/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/js/admin/jquery-jvectormap-world-mill.js"></script>
<!-- small charts -->
<script src="/js/admin/jquery.sparkline.min.js"></script>

<!-- dashboard init -->
<script src="/js/admin.js"></script>

</body>

</html>