@extends('admin.layouts.admin-layout')
@section('content')
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
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Posts</li>
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
                <div class="col-md-12">
                    <h3>Posts</h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">

                        <div class="row admin-table-filters">
                            <div class="col-lg-9">

                                <form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">-</option>
													<option value="approve">Approve</option>
													<option value="publish">Publish</option>
													<option value="delete">Delete</option>
												</select>
											</span>
                                    <span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="author">Author</option>
													<option value="title">Title</option>
													<option value="status">Status</option>
												</select>
											</span>

                                    <span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
                                </form>

                            </div>
                            <!-- .col-* -->
                            <div class="col-lg-3 text-lg-right">
                                <div class="widget widget_search">

                                    <form method="get" class="searchform" action="./">
                                        <!-- <div class="form-group-wrap"> -->
                                        <div class="form-group">
                                            <label class="sr-only" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                        </div>
                                        <button type="submit" class="theme_button color1">Search</button>
                                        <!-- </div> -->
                                    </form>
                                </div>

                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <th>Title:</th>
                                    <th>Author:</th>
                                    <th>Date:</th>
                                    <th>Categories:</th>
                                    <th>Status:</th>
                                </tr>
                                @foreach($users as $user)
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_post.html">
                                                Consectetur adipisicing elit
                                            </a>
                                        </h5>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">{{ $user->first_name }}</a>
                                                </h5>
                                                &lt;{{ $user->email }}&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">{{ $user->created_at }}</time>
                                    </td>
                                    <td class="media-middle">
                                        uncategorized, category1
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>
                                </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- .table-responsive -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination highlightlinks">
                                <li>
                                    <a href="?page=1">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>

                                @for($i = 1; $i <= $total; $i++)
                                    <li class="@if($i == $users->CurrentPage()) active @endif"><a href="?page={{ $i }}">{{ $i }}</a></li>
                                    @endfor
                                <li>
                                    <a href="?page={{ $total }}">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-md-right">
                            Showing 1 to 6 of 12 items
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row main columns -->
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
@endsection