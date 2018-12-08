@extends('layout')

@section('content')
@push('styles')
    <link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
@endpush
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Products</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li class="active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="shop-sorting">

                        <form class="form-inline content-justify vertical-center content-margins">

                            <div class="fontsize_20">
                                Showing 1-6 of 36 results
                            </div>


                            <div class="form-group select-group">
                                <select aria-required="true" id="date" name="date" class="choice empty form-control">
                                    <option value="" disabled selected data-default>Default Sorting</option>
                                    <option value="value">by Value</option>
                                    <option value="date">by Date</option>
                                    <option value="popular">by Popularity</option>
                                </select>
                                <i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
                            </div>

                        </form>

                    </div>


                    <div class="columns-3">

                        <ul id="products" class="products list-unstyled">
                            @forelse($products as $product)
                            <li class="product type-product">
                                <div class="vertical-item content-padding text-center with_shadow rounded">
                                    <div class="item-media with_background">
                                        <img src="images/shop/01.png" alt="" />
                                    </div>
                                    <div class="item-content">
                                        @php
                                        $id = $product->id;
                                        @endphp
                                        <h1>{{ $product->id }}</h1>
                                        <h4 class="hover-color3 bottommargin_10">
                                            <a href="product{{ $id }}">{{ $product->title }}</a>
                                        </h4>
                                        <p class="price">
                                            <del>
                                                <span class="amount">${{ $product->old_price }}</span>
                                            </del>
                                            <ins>
                                                <span class="amount">${{ $product->price }}</span>
                                            </ins>
                                        </p>
                                        <p>
                                            <a href="#" class="theme_button color3">Add to Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                                @empty
                            <p>
                                Нет товаров
                            </p>
                                @endforelse
                        </ul>

                    </div>
                    <!-- eof .columns-* -->


                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <ul class="pagination highlightlinks">
                                <li class="disabled">
                                    <a href="#">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
@push('scripts')
    <script src="js/switcher.js"></script>
@endpush
@endsection