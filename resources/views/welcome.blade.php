@extends('layout.master')
@section('master_container')

    <div class="main_class container @yield('master_div_class')" id ="particles-js">
        <div class="row">
            <div class="col-md-4">
                @include ('component.CategoryList.index')
            </div>
            <div class="col-md-8">

            </div>

        </div>
    </div>
@endsection