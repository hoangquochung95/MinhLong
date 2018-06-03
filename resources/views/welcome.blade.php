@extends('layout.master')
@section('master_container')
<div class="container-fluid" style="margin: 0 0 0 32px">
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
    <div class="row">
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
           {{--<div class="popular-item"><img src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></div>--}}
           {{--<div class="popular-item"><img  src="{{ URL::asset('image/c.jpeg') }}" alt="Third slide" height="200" width="200"></div>--}}
       </div>

    </div>
</div>
<div class="container" >
    <div class="row">
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

        </div>
    </div>
</div>

@endsection