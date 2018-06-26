@extends('layout.master')
@section('master_container')
    <div id="app">
        <div class="container" >
            <p class="view-tab-title" id="view-tab-category"> Danh mục sản phẩm</p>
            <view-tab-category></view-tab-category>
            <p class="view-tab-title" id="luxury-item-shop"> Sản phẩm cao cấp</p>
            <view-tab-category></view-tab-category>
            <p class="view-tab-title" id="highlights-item-shop"> Sản phẩm ưa chuộng</p>
            <view-tab-category></view-tab-category>
        </div>
    </div>
@endsection
@section('sub_script')
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection