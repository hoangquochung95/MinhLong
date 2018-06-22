<!DOCTYPE html>
<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Minh Long</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
<script src="{{ URL::asset("/js/jquery.js")}}"></script>
<script src="{{ URL::asset("/js/vue.js")}}"></script>
<script src="{{ URL::asset("/js/vue-config.js")}}"></script>
<body>
@include ('layout.header')
@yield('master_container')
@include ('layout.footer')
@include ('layout.MasterValue')
<div class="on-top"><img src="{{ URL::asset('image/on-top.png') }}" alt=""></div>
<script src="{{ URL::asset("/js/bootstrap.js")}}"></script>
<script src="{{ URL::asset("/js/main.js")}}"></script>
<script src="{{ URL::asset("/js/require.js")}}"></script>
@yield('sub_script')
</body>
</html>
