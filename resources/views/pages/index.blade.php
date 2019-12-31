@extends('layouts.master')

@section('content')
    <! -- start sidebar + content -->
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">

                <div class="list-group">
                    <a href="#" class="list-group-item disabled">First item</a>
                    <a href="#" class="list-group-item">Second item</a>
                    <a href="#" class="list-group-item">Third item</a>
                </div>

            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Products</h3>
                    <div class="row">

                        <! -- will be repeated as per featured product rows -->
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top feature-img" src="{{ asset('images/products/' . 'iphone.jpg') }}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">iphone</h4>
                                    <p class="card-text">Taka - 90,000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top feature-img" src="{{ asset('images/products/' . 'iphone.jpg') }}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">iphone</h4>
                                    <p class="card-text">Taka - 90,000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top feature-img" src="{{ asset('images/products/' . 'iphone.jpg') }}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">iphone</h4>
                                    <p class="card-text">Taka - 90,000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top feature-img" src="{{ asset('images/products/' . 'iphone.jpg') }}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">iphone</h4>
                                    <p class="card-text">Taka - 90,000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <! -- end -->

                    </div>
                </div>
                <div class="widget">

                </div>

            </div>
        </div>
    </div>
    <! -- End sidebar + content -->
@endsection


