@extends('layout.master')

@section('class_body')
    class="login-container"
@endsection
@section('master_container')
    <div class="main-login">
        <div id="app">
            <div class="form-for-user">
                <login></login>
            </div>
        </div>
    </div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection