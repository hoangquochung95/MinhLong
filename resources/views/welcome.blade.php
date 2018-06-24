@extends('layout.master')
@section('master_container')
    <div id="app">
        <div class="container" >
            <div class="row">
                <div id="carousel-pr-index" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ URL::asset('image/a.jpeg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::asset('image/b.jpeg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-pr-index" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-pr-index" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row" >
                <div class="category-list-popular" >
                    <div class="popular-item" >
                        <ul>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                            <li><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></li>
                        </ul>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

            </div>
            <div class="row index-link " >
                <div  class="col-md-3">
                    <a class="nav-link active" href="#">Active</a>
                </div>

                <div class="col-md-3">
                    <a class="nav-link" href="#">Link</a>
                </div>
                <div class="col-md-3">
                    <a class="nav-link" href="#">Link</a>
                </div>
                <div class="col-md-3">
                    <a class="nav-link" href="#">Disabled</a>
                </div>
            </div>
            <p class="view-tab-title"> Danh mục sản phẩm</p>
            <view-tab-category></view-tab-category>
            <p class="view-tab-title"> Sản phẩm ưa chuộng</p>

            <p class="view-tab-title"> Sản phẩm cao cấp</p>

            <p class="view-tab-title">Liên Hệ</p>

        </div>
    </div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection