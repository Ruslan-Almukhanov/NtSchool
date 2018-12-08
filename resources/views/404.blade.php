@extends('layout')
@section('content')
    <section class="ls ms section_404 background_cover section_padding_top_100 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="inline-block text-center">
                        <p class="not_found">
                            <span class="highlight2">404</span>
                        </p>
                        <h3>Oops, page not found!</h3>
                        <p>
                            You can search what interested:
                        </p>
                        <div class="widget widget_search">
                            <form method="get" class="searchform" action="./">
                                <div class="form-group">
                                    <label class="sr-only" for="page_search">Search for:</label>
                                    <input type="text" id="page_search" value="" name="search" class="form-control" placeholder="Keyword">
                                </div>
                                <button type="submit" class="theme_button">Search</button>
                            </form>
                        </div>
                        <p class="divider_20">
                            or
                        </p>
                        <p>
                            <a href="./" class="theme_button color3 wide_button">Back to Homepage</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ds page_copyright section_padding_15">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="grey">&copy; Copyright 2017 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    @endsection