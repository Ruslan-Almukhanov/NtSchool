@extends('admin.layouts.admin-layout')
@section('content')

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
                                @foreach($comments as $comment)
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
                                                {{ $comment->author }}
                                                <small>{{ $comment->created_at }}</small>
                                            </h5>
                                            <div>
                                                {{ $comment->content }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
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
    @endsection