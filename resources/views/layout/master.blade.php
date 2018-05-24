<!DOCTYPE html>
<html>
<title>Minh Long</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
<script src="{{ URL::asset("/js/jquery.js")}}"></script>
<script src="{{ URL::asset("/js/angular.min.js")}}"></script>
<body>

@include ('layout.header')
<div class="main_class container @yield('master_div_class')" id ="particles-js">
    <div class="row">
        <div class="col-md-4">
            @yield('master_container_left')
        </div>
        <div class="col-md-8">
            @yield('master_container_right')
        </div>

    </div>
</div>
@include ('layout.footer')
<script src="{{ URL::asset("/js/bootstrap.js")}}"></script>
<script src="{{ URL::asset("/js/particles.js")}}"></script>
<script src="{{ URL::asset("/js/main.js")}}"></script>
</body>
</html>
