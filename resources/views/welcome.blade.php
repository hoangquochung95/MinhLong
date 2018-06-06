@extends('layout.master')
@section('master_container')
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
    <p class="view-tab-title"> abc</p>
    <div class="row view-tab view-tab-category">

        <ul class="nav nav-tabs index-tab-1 ">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <div class="col-md-4">
            <div class="category-list">
                <div class="list-group">
                    <span class="list-group-item"> Danh sách </span>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại n</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#sub-list-item" aria-expanded="false" aria-controls="collapseExample">
                        <div class="list-group-left">Thể Loại 1</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <div class="collapse" id="sub-list-item">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-left">Thể Loại 2</div>
                            <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                        </a>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 3</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 4</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 5</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class ="title-item-shop">
                                    <b>Bồn cầu cao cấp</b>
                                </div>
                                <div class ="price-item-shop">
                                    <p>Price: $10</p>
                                </div>
                                <div class ="rating-item-shop">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class ="title-item-shop">
                                    <b>Bồn cầu cao cấp</b>
                                </div>
                                <div class ="price-item-shop">
                                    <p>Price: $10</p>
                                </div>
                                <div class ="rating-item-shop">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div><div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class ="title-item-shop">
                                    <b>Bồn cầu cao cấp</b>
                                </div>
                                <div class ="price-item-shop">
                                    <p>Price: $10</p>
                                </div>
                                <div class ="rating-item-shop">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class ="title-item-shop">
                                    <b>Bồn cầu cao cấp</b>
                                </div>
                                <div class ="price-item-shop">
                                    <p>Price: $10</p>
                                </div>
                                <div class ="rating-item-shop">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">
                                    <img src="{{ URL::asset('image/star.png') }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <b>Bồn cầu cao cấp</b>
                            </div>
                            <div class ="price-item-shop">
                                <p>Price: $10</p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <b>Bồn cầu cao cấp</b>
                            </div>
                            <div class ="price-item-shop">
                                <p>Price: $10</p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                </div><div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <b>Bồn cầu cao cấp</b>
                            </div>
                            <div class ="price-item-shop">
                                <p>Price: $10</p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <b>Bồn cầu cao cấp</b>
                            </div>
                            <div class ="price-item-shop">
                                <p>Price: $10</p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">
                                <img src="{{ URL::asset('image/star.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <p class="view-tab-title"> abc</p>
    <div class="row view-tab highlights-item-shop">
        <div class="col-md-3">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>

    </div>
    <div class="row view-tab">
        <div class="col-md-3">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>
        <div class="col-md-3">
            <img class="card-img-top small-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
            <img class="card-img-top large-item-shop" src="{{ URL::asset('image/b.jpeg') }}" alt="Card image cap">
        </div>

    </div>
</div>

@endsection