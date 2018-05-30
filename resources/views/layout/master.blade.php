<!DOCTYPE html>
<html>
<title>Minh Long</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
<script src="{{ URL::asset("/js/jquery.js")}}"></script>
<script src="{{ URL::asset("/js/angular.min.js")}}"></script>
<body>

@include ('layout.header')
@yield('master_container')
@include ('layout.footer')

<script src="{{ URL::asset("/js/bootstrap.js")}}"></script>
<script src="{{ URL::asset("/js/particles.js")}}"></script>
<script src="{{ URL::asset("/js/main.js")}}"></script>
@yield('sub_script')
</body>
</html>
