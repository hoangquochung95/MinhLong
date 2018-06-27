@extends('layout.master')
@section('master_container')
<div class="container">
    <div id="app">
        <div class="container" >
            <p class="view-tab-title" id="view-tab-category"> Danh mục sản phẩm</p>
            <view-tab-category></view-tab-category>
        </div>
    </div>
</div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection