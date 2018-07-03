@extends('layout.master')

@section('class_body')
    class="login-container"
@endsection
@section('master_container')
    <div class="main-login">
        <div id="app">
            <div class="form-for-user">
                <router-view></router-view>
            </div>
        </div>
    </div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/home.js') }}"></script>
@endsection