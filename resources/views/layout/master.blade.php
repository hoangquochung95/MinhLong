<!DOCTYPE html>
<html>
<title>Minh Long</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
<script src="{{ URL::asset("/js/jquery.js")}}"></script>
<script src="{{ URL::asset("/js/angular.min.js")}}"></script>
<body>

@include ('layout.header')
<div id="particles-js">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">

            </div>

        </div>
    </div>
</div>
@extends ('layout.footer')
<script src="{{ URL::asset("/js/bootstrap.js")}}"></script>
<script src="{{ URL::asset("/js/particles.js")}}"></script>
<script src="{{ URL::asset("/js/main.js")}}"></script>
</body>
</html>
