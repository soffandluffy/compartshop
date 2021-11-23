@extends('frontend.layouts.layout')

@section('title')
Compart Shop
@stop

@section('pagestyles')

@stop

@section('content')
<div class="d-flex flex-row h-300px align-items-center justify-content-center">
    <div class="d-flex flex-column">
        <figure class="shadow rounded-circle p-8">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr012.svg-->
            <span class="svg-icon svg-icon-success fw-bolder"><svg xmlns="http://www.w3.org/2000/svg" class="h-100px w-100px" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"/>
            <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"/>
            </svg></span>
            <!--end::Svg Icon-->
        </figure>
    </div>

</div>
<div class="d-flex flex-row align-items-center justify-content-center mb-10">
    <div class="d-flex flex-column text-center">
        <h3>Order Confirmed</h3>
        <h4><p class="text-muted">Thank you for purchasing from CompartShop</p></h4>
        <a href="{{ route('home') }}" class="btn btn-info">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm002.svg-->
            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black"/>
            <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black"/>
            <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black"/>
            </svg></span>
            <!--end::Svg Icon-->
             Shop Again</a>
    </div>
</div>
@stop

@section('pagescripts')
<script>
    $(document).ready(function (){
    });
</script>
@stop