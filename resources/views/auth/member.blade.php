@extends('layout.master')

@section('class_body')
    class="login-container"
@endsection
@section('master_container')
    <div class="main-login container-fluid">
        <div id="app" class="row">
            <div class="form-for-user">
                <router-view></router-view>
            </div>
        </div>
    </div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/auth.js') }}"></script>
@endsection