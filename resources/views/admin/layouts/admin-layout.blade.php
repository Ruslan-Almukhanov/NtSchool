<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Pet Salon @hasSection ('title') | @yield('title')@endif</title>
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
        <!-- template sections -->

        <header class="page_header_side page_header_side_sticked active-slide-side-header ds">
            <div class="side_header_logo ds ms">
                <a href="/">
						<span class="logo_text margin_0">
							Pet Salon
						</span>
                </a>
            </div>
            <span class="toggle_menu_side toggler_light header-slide">
					<span></span>
				</span>
            <div class="scrollbar-macosx">
                <div class="side_header_inner">

                    <!-- user -->

                    <div class="user-menu">


                        <ul class="menu-click">
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="images/team/01.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>{{ $adminInfo->name }}</h4>
                                            Administrator

                                        </div>

                                    </div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_profile.html">
                                            <i class="fa fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin-profile-edit/{{ $adminInfo->id }}">
                                            <i class="fa fa-edit"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_inbox.html">
                                            <i class="fa fa-envelope-o"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_signin.html">
                                            <i class="fa fa-sign-out"></i>
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>

                    <!-- main side nav start -->
                    <nav class="mainmenu_side_wrapper">
                        <h3 class="dark_bg_color">Dashboard</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="admin_index.html">
                                    <i class="fa fa-th-large"></i>
                                    Dashboard
                                </a>

                            </li>
                        </ul>

                        <h3 class="dark_bg_color">Pages</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    Account
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_profile.html">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin-profile-edit">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_inbox.html">
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_signin.html">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_signup.html">
                                            Sign Up
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/admin-users-list">
                                    <i class="fa fa-file-text"></i>
                                    Posts
                                </a>
                                <ul>
                                    <li>
                                        <a href="/admin-users-list">
                                            Posts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_post.html">
                                            Single Post
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="admin_products.html">
                                    <i class="fa fa-suitcase"></i>
                                    Products
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_products.html">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_product.html">
                                            Single Product
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="admin_orders.html">
                                    <i class="fa fa-shopping-cart"></i>
                                    Orders
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_orders.html">
                                            Orders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_order.html">
                                            Single Order
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin_comments.html">
                                    <i class="fa fa-comment"></i>
                                    Comments
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_comments.html">
                                            Comments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_comment.html">
                                            Single Comment
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin_faq.html">
                                    <i class="fa fa-support"></i>
                                    FAQ
                                </a>
                            </li>
                        </ul>

                        <h3 class="dark_bg_color">UI Elements</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="admin_tables.html">
                                    <i class="fa fa-table"></i>
                                    Tables
                                </a>
                            </li>
                            <li>
                                <a href="admin_forms.html">
                                    <i class="fa fa-check-square-o"></i>
                                    Forms
                                </a>
                            </li>
                            <li>
                                <a href="admin_bootstrap.html">
                                    <i class="fa fa-cog"></i>
                                    Bootstrap
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- eof main side nav -->

                    <div class="with_padding grey text-center">
                        10GB of
                        <strong>250GB</strong> Free
                    </div>

                </div>
            </div>
        </header>

        <header class="page_header header_darkgrey">

            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="../../">
                    <div class="form-group">
                        <label class="screen-reader-text" for="widget-search-header">Search for:</label>
                        <input id="widget-search-header" type="text" value="" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>


            <div class="pull-right big-header-buttons">
                <ul class="inline-dropdown inline-block">


                    <li class="dropdown header-notes-dropdown">
                        <a class="header-button" data-target="#" href="../../" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <i class="fa fa-bell-o grey"></i>
                            <span class="header-button-text">Messages</span>
                            <span class="header-dropdown-number">
									12
								</span>
                        </a>

                        <div class="dropdown-menu ls">
                            <div class="dropdwon-menu-title with_background">
                                <strong>12 Pending</strong> Notifications

                                <div class="pull-right darklinks">
                                    <a href="#">View All</a>
                                </div>

                            </div>
                            <ul class="list-unstyled">

                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                            <span class="pull-right">Just Now</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-info">
                                                <i class="fa fa-bullhorn"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                            <span class="pull-right">20 minutes</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													Server overloaded
												</span>
                                            <span class="pull-right">1 hour</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													New order
												</span>
                                            <span class="pull-right">3 hours</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													Long database query
												</span>
                                            <span class="pull-right">4 hours</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="media with_background">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                            <span class="pull-right">4 hours</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="dropdown header-notes-dropdown">
                        <a class="header-button" data-target="#" href="../../" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <i class="fa fa-envelope-o grey"></i>
                            <span class="header-button-text">Inbox</span>
                            <span class="header-dropdown-number">
									8
								</span>
                        </a>

                        <div class="dropdown-menu ls">
                            <div class="dropdwon-menu-title with_background">
                                <strong>8 New</strong> Messages

                                <div class="pull-right darklinks">
                                    <a href="#">View All</a>
                                </div>

                            </div>
                            <ul class="list1 no-bullets no-top-border no-bottom-border">

                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/team/01.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <a href="#">
                                                    Alex Walker <span class="pull-right">23 feb at 11:36</span>
                                                </a>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/team/02.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <a href="#">
                                                    Janet C. Donnalds <span class="pull-right">23 feb at 12:17</span>
                                                </a>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/team/03.jpg" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <a href="#">
                                                    Victoria Grow <span class="pull-right">23 feb at 16:44</span>
                                                </a>
                                            </h5>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="dropdown header-notes-dropdown">
                        <a class="header-button" data-target="#" href="../../" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <i class="fa fa-calendar-o grey"></i>
                            <span class="header-button-text">User</span>
                        </a>
                        <div class="dropdown-menu ls">

                            <div class="dropdwon-menu-title with_background">
                                <strong>14 Pending</strong> Tasks

                                <div class="pull-right darklinks">
                                    <a href="#">View All</a>
                                </div>

                            </div>

                            <ul class="list-unstyled">

                                <li>
                                    <p class="progress-bar-title grey">
                                        <strong>Progress</strong>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <p class="progress-bar-title grey">
                                        <strong>Success</strong>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="52">
                                            <span>52%</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <p class="progress-bar-title grey">
                                        <strong>Knowing</strong>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="75">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <p class="progress-bar-title grey">
                                        <strong>Rating</strong>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </li>

                    <!-- Uncomment following to show user menu

                <li class="dropdown user-dropdown-menu">
                    <a class="header-button" id="user-dropdown-menu" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                        <i class="fa fa-user grey"></i> <span class="header-button-text">User</span>
                    </a>
                    <div class="dropdown-menu ls">
                        <ul class="nav darklinks">
                            <li>
                                <a href="admin_profile.html">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="admin_profile_edit.html">
                                    <i class="fa fa-edit"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="admin_inbox.html">
                                    <i class="fa fa-envelope-o"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="admin_signin.html">
                                    <i class="fa fa-sign-out"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>

                    </div>

                </li>

            -->

                    <li class="dropdown visible-xs-inline-block">
                        <a href="#" class="search_modal_button header-button">
                            <i class="fa fa-search grey"></i>
                            <span class="header-button-text">Search</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- eof .header_right_buttons -->
        </header>


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
<script src="/js/compressed.js"></script>
<script src="/js/main.js"></script>

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