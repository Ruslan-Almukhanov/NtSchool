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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="css/dashboard.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
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
        <form method="get" class="searchform search-form form-inline" action="./">
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
            <form class="with_padding contact-form" method="post" action="./">
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
                <a href="./admin_index.html">
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
                                            <h4>Ann Andersen</h4>
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
                                        <a href="admin_profile_edit.html">
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
                                <a href="admin_posts.html">
                                    <i class="fa fa-file-text"></i>
                                    Posts
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_posts.html">
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
                <form method="get" class="searchform form-inline" action="./">
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
                        <a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
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
                        <a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
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
                        <a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
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

        <section class="ls with_bottom_border">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <ol class="breadcrumb darklinks">
                            <li>
                                <a href="#">Homepage</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- .col-* -->
                    <div class="col-md-6 text-md-right">
							<span class="dashboard-daterangepicker">
								<i class="fa fa-calendar"></i>
								<span></span>
								<i class="caret"></i>
							</span>
                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>

        <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-4">
                        <h3 class="dashboard-page-title">Dashboard
                            <small>main page</small>
                        </h3>
                    </div>
                    <div class="col-md-8 text-md-right">
                        <h3 class="sparklines-title">
                            <sup>Today Earnings:</sup>

                            $3,000

                            <span class="sparklines" data-values="670,350,135,-170,-324,-386,-468,-200,55,375,520,270,790,-670,-350,135,170,324,386,468,10,55,375,520,270,790" data-type="bar" data-line-color="#eeb269" data-neg-color="#dc5753" data-height="30" data-bar-width="2">
								</span>

                        </h3>

                        <h3 class="sparklines-title">
                            <sup>Yesterday Earn: </sup>
                            $4,000

                            <span class="sparklines" data-values="670,350,135,-170,-324,386,-468,-10,55,375,520,-270,790,670,-350,135,170,324,386,468,10,-55,-375,-520,270,790" data-type="bar" data-line-color="#4db19e" data-neg-color="#007ebd" data-height="30" data-bar-width="2">
								</span>
                        </h3>

                    </div>

                </div>
                <!-- .row -->


                <div class="row">
                    <div class="col-lg-3 col-sm-6">

                        <div class="teaser warning_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="1257" data-speed="2100">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="1257" data-speed="2100">0</h3>
                            <p>Reviews / Month</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="teaser danger_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="346" data-speed="1500">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="346" data-speed="1500">0</h3>
                            <p>Clients / Month</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="teaser success_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="216" data-speed="1900">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="216" data-speed="1900">0</h3>
                            <p>Orders / Month</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="teaser info_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                            <h3 class="counter-wrap highlight" data-from="0" data-to="346" data-speed="1800">
                                <small>$</small>
                                <span class="counter" data-from="0" data-to="346" data-speed="1500">0</span>
                                <small class="counter-add">k</small>
                            </h3>
                            <p>Total Profit</p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <!-- Yearly Visitors -->
                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>Visitor Statistics</h4>
                            <div class="canvas-chart-wrapper">
                                <canvas class="canvas-chart-line-yearly-visitors"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- .col-* -->

                    <!-- Yearly Visitors -->
                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>Visitor vs Sells</h4>
                            <div class="canvas-chart-wrapper">
                                <canvas class="canvas-chart-line-visitors-sels"></canvas>
                            </div>
                            <!--
                Pie Chart for new visitors. Uncomment if need
                <div>
                    <canvas class="canvas-chart-pie-visitors"></canvas>
                </div>
                -->
                        </div>
                    </div>
                    <!-- .col-* -->

                </div>
                <!-- .row -->

                <div class="row">
                    <div class="col-xs-12 col-md-6">

                        <div class="with_border with_padding">
                            <h4>
                                Latest Comments
                            </h4>
                            <div class="admin-scroll-panel scrollbar-macosx">
                                <ul class="list1 no-bullets">
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Alex Walker
                                                    <small>2 hours ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Janet C. Donnalds
                                                    <small>5 hours ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- .admin-scroll-panel -->
                            <div class="text-right greylinks panel-view-all">
                                <a href="admin_comments.html">View All</a>
                            </div>
                        </div>
                        <!-- .with_border -->
                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="with_border with_padding">
                            <h4>
                                Latest Orders
                            </h4>
                            <div class="admin-scroll-panel scrollbar-macosx">
                                <ul class="list1 no-bullets">
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Product Name
                                                    <small>365$</small>
                                                </h5>
                                                <div>
                                                    <h6>Order Comment:</h6>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    6 Products
                                                    <small>129$</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Product Name Secont
                                                    <small>199$</small>
                                                </h5>
                                                <div>
                                                    <h6>Order Comment:</h6>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Product Name
                                                    <small>365$</small>
                                                </h5>
                                                <div>
                                                    <h6>Order Comment:</h6>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    6 Products
                                                    <small>129$</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-editable small-teaser">
                                        <div class="media">
                                            <div class="item-edit-controls darklinks">
                                                <a href="#">
                                                    <i class="fa fa-share-square-o"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="media-left">
                                                <div class="teaser_icon label-success fontsize_16">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    Product Name Secont
                                                    <small>199$</small>
                                                </h5>
                                                <div>
                                                    <h6>Order Comment:</h6>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- .admin-scroll-panel -->
                            <div class="text-right greylinks panel-view-all">
                                <a href="admin_orders.html">View All</a>
                            </div>
                        </div>
                        <!-- .with_border -->
                    </div>
                    <!-- .col-* -->

                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>
                                DataBase Statistics
                            </h4>
                            <div class="admin-scroll-panel scrollbar-macosx">

                                <ul class="list1 no-bullets">
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left">
                                                <i class="fa fa-users highlight"></i>
                                            </div>
                                            <div class="media-body">
                                                <strong class="grey">
                                                    25364
                                                </strong>
                                                Total Users
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left">
                                                <i class="fa fa-comment highlight"></i>
                                            </div>
                                            <div class="media-body">
                                                <strong class="grey">
                                                    12520
                                                </strong>
                                                Reviews
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left">
                                                <i class="fa fa-shopping-cart highlight"></i>
                                            </div>
                                            <div class="media-body">
                                                <strong class="grey">
                                                    5674
                                                </strong>
                                                Total Products
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left">
                                                <i class="fa fa-money highlight"></i>
                                            </div>
                                            <div class="media-body">
                                                <strong class="grey">
                                                    $132200
                                                </strong>
                                                Total Sales
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- .admin-scroll-panel -->
                        </div>
                        <!-- .with_border -->
                    </div>
                    <!-- .col-* -->

                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>
                                Last Notes
                            </h4>
                            <div class="admin-scroll-panel scrollbar-macosx">

                                <ul class="list1 no-bullets">
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-success round">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
													<span class="grey">
														New order
													</span>
                                                <small class="pull-right">2 minutes ago</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-success round">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
													<span class="grey">
														New user registered
													</span>
                                                <small class="pull-right">3 minutes ago</small>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-danger round">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
													<span class="grey">
														Server overloaded
													</span>
                                                <small class="pull-right">5 minutes ago</small>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-warning round">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
													<span class="grey">
														Long database query
													</span>
                                                <small class="pull-right">5 minutes ago</small>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-success round">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
													<span class="grey">
														New user registered
													</span>
                                                <small class="pull-right">8 minutes ago</small>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- .admin-scroll-panel -->
                        </div>
                        <!-- .with_border -->
                    </div>
                    <!-- .col-* -->


                </div>
                <!-- .row -->


                <div class="row">


                    <div class="col-xs-12 col-lg-6">

                        <div class="with_border with_padding">


                            <h4 class="unstyled-tabs-title">Comments</h4>


                            <!-- Nav tabs -->
                            <ul class="nav-unstyled darklinks" role="tablist">
                                <li class="active"><a href="#tab-comments-1" role="tab" data-toggle="tab">Pending</a></li>
                                <li><a href="#tab-comments-2" role="tab" data-toggle="tab">Approved</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tab-unstyled tab-comments admin-scroll-panel scrollbar-macosx">
                                <div class="tab-pane fade in active" id="tab-comments-1">
                                    <ul class="list-unstyled">


                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/01.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Alex Walker
                                                        <small>2 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </p>
                                                        <p class="warning_color">
                                                            Pending
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/02.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Janet C. Donnalds
                                                        <small>5 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                        </p>
                                                        <p class="danger_color">
                                                            Rejected
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/03.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Victoria Grow
                                                        <small>1 day ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                        </p>
                                                        <p class="warning_color">
                                                            Pending
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/01.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Alex Walker
                                                        <small>2 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </p>
                                                        <p class="danger_color">
                                                            Rejected
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/02.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Janet C. Donnalds
                                                        <small>5 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                        </p>
                                                        <p class="warning_color">
                                                            Pending
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/03.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Victoria Grow
                                                        <small>1 day ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                        </p>
                                                        <p class="warning_color">
                                                            Pending
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="tab-comments-2">

                                    <ul class="list-unstyled">

                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/02.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Janet C. Donnalds
                                                        <small>5 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                        </p>
                                                        <p class="info_color">
                                                            Approved
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/01.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Alex Walker
                                                        <small>2 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </p>
                                                        <p class="success_color">
                                                            Replied
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/03.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Victoria Grow
                                                        <small>1 day ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                        </p>
                                                        <p class="info_color">
                                                            Pending
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/01.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Alex Walker
                                                        <small>2 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </p>
                                                        <p class="success_color">
                                                            Approved
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/02.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Janet C. Donnalds
                                                        <small>5 hours ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                                        </p>
                                                        <p class="info_color">
                                                            Approved
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-editable">
                                            <div class="media">
                                                <div class="item-edit-controls darklinks">
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                                <div class="media-left">
                                                    <img src="images/team/03.jpg" alt="...">
                                                </div>
                                                <div class="media-body">
                                                    <h5>
                                                        Victoria Grow
                                                        <small>1 day ago</small>
                                                    </h5>
                                                    <div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                        </p>
                                                        <p class="info_color">
                                                            Replied
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>


                        </div>

                    </div>
                    <!-- .col-* -->

                    <div class="col-xs-12 col-lg-6">
                        <div class="with_border with_padding">
                            <h4>
                                Chats
                            </h4>
                            <hr>
                            <div class="admin-scroll-panel scrollbar-macosx">

                                <ul class="list-unstyled">
                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body with_background">
                                                <h5>
                                                    Ann Andersen
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-body with_background">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body with_background">
                                                <h5>
                                                    Ann Andersen
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-body with_background">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body with_background">
                                                <h5>
                                                    Ann Andersen
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="chat-item">
                                        <div class="media">
                                            <div class="media-body with_background">
                                                <h5>
                                                    Victoria Grow
                                                    <small>1 day ago</small>
                                                </h5>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <!-- .admin-scroll-panel -->
                        </div>
                        <!-- .with_border -->
                    </div>
                </div>


                <div class="row">
                    <!-- Map -->
                    <div class="col-xs-12 col-md-6 dashboard-map">

                        <div class="with_border with_padding no_bottom_border">
                            <div class="world_map"></div>
                        </div>
                        <div class="with_border no_top_border table-responsive">


                            <table class="table-striped">
                                <tr>
                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        Visits
                                    </th>
                                    <th>
                                        User Activity
                                    </th>
                                    <th>
                                        Online
                                    </th>
                                    <th>
                                        Demographic
                                    </th>
                                    <th></th>
                                </tr>

                                <tr>
                                    <td>
                                        USA
                                    </td>
                                    <td>
                                        4,583
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450,135,-170,-324,-386,-168,-10,55,375,520,270,490" data-type="bar" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        235
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450,135" data-type="pie" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="settings-button" id="map-data-1" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <ul class="dropdown-menu greylinks" aria-labelledby="map-data-1">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-print"></i> PDF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-remove"></i> Cancel
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        Canada
                                    </td>
                                    <td>
                                        7,934
                                    </td>
                                    <td>
											<span class="sparklines" data-values="200,150,735,70,158,386,68,130,155,475,520,370,490" data-type="bar" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        235
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,135" data-type="pie" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="settings-button" id="map-data-2" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <ul class="dropdown-menu greylinks" aria-labelledby="map-data-2">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-print"></i> PDF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-remove"></i> Cancel
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        Australia
                                    </td>
                                    <td>
                                        3,656
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450,135,870,824,386,868,810,55,375,520,270,490" data-type="bar" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        235
                                    </td>
                                    <td>
											<span class="sparklines" data-values="770,250,135" data-type="pie" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="settings-button" id="map-data-3" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <ul class="dropdown-menu greylinks" aria-labelledby="map-data-3">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-print"></i> PDF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-remove"></i> Cancel
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        France
                                    </td>
                                    <td>
                                        1,516
                                    </td>
                                    <td>
											<span class="sparklines" data-values="670,350,135,-170,-324,-386,-468,-10,55,375,520,270,790" data-type="bar" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        235
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450" data-type="pie" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="settings-button" id="map-data-4" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <ul class="dropdown-menu greylinks" aria-labelledby="map-data-4">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-print"></i> PDF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-remove"></i> Cancel
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Great Britain
                                    </td>
                                    <td>
                                        2,018
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450,135,870,824,386,418,510,55,375,520,270,190" data-type="bar" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        235
                                    </td>
                                    <td>
											<span class="sparklines" data-values="170,450,135" data-type="pie" data-line-color="#007ebd" data-height="20">
											</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="settings-button" id="map-data-5" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <ul class="dropdown-menu greylinks" aria-labelledby="map-data-5">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-print"></i> PDF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-remove"></i> Cancel
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination highlightlinks">
                                            <li class="disabled">
													<span>
														<i class="fa fa-angle-left"></i>
													</span>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <!-- .col-* -->
                    <!-- Calendar -->
                    <div class="col-xs-12 col-md-6">

                        <h3 class="module-title darkgrey_bg_color">Events</h3>
                        <div class="events_calendar"></div>

                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row -->


                <div class="row">

                    <!-- Monthly Visitors -->
                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>Monthly Visitor Statistics</h4>
                            <div class="canvas-chart-wrapper">
                                <canvas class="canvas-chart-line-monthly-visitors"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- .col-* -->


                    <!-- Monthly Visitors -->
                    <div class="col-xs-12 col-md-6">
                        <div class="with_border with_padding">
                            <h4>Monthly Conversion</h4>
                            <div class="canvas-chart-wrapper">
                                <canvas class="canvas-chart-line-conversions"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row -->


            </div>
            <!-- .container -->
        </section>

        <section class="page_copyright ds darkblue_bg_color">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="grey">&copy; Copyrights 2017</p>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <p class="grey">Last account activity <i class="fa fa-clock-o"></i> 52 mins ago</p>
                    </div>
                </div>
            </div>
        </section>

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
<script src="js/admin/moment.min.js"></script>
<script src="js/admin/fullcalendar.min.js"></script>
<!-- range picker -->
<script src="js/admin/daterangepicker.js"></script>

<!-- charts -->
<script src="js/admin/Chart.bundle.min.js"></script>
<!-- vector map -->
<script src="js/admin/jquery-jvectormap-2.0.3.min.js"></script>
<script src="js/admin/jquery-jvectormap-world-mill.js"></script>
<!-- small charts -->
<script src="js/admin/jquery.sparkline.min.js"></script>

<!-- dashboard init -->
<script src="js/admin.js"></script>

</body>

</html>