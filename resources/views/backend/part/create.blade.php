@extends('backend.layouts.layout')

@section('title')
Compart Shop | Part List
@stop

@section('pagestyles')
<link rel="stylesheet" href="{{ asset('plugins/image-uploader/image-uploader.min.css') }}">
@stop

@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add Part</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('part.index') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Parts</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-dark">Add Parts</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Wrapper-->
            <div class="me-4">
                <!--begin::Menu-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <form action="{{ route('part.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Add customer-->
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add Part</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <label class="form-label">Gambar Produk</label>
                                        <div class="input-images mb-4"></div>
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-4 col-lg-12">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" name="name" class="form-control form-control-solid" placeholder="Product Name"/>
                                            {{-- <input name="name" type="text" placeholder="Nama Produk" class="form-control" id="product_title"> --}}
                                        </div>
                                        <div class="mb-4 col-lg-12">
                                            <label class="form-label">Brand</label>
                                            <input name="brand" type="text" placeholder="Brand" class="form-control form-control-solid" id="product_brand">
                                        </div>
                                        <div class="mb-4 col-lg-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" placeholder="Description" class="form-control form-control-solid" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label">Category</label>
                                        <input name="category" type="text" placeholder="Category" class="form-control form-control-solid" id="product_category">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Price</label>
                                        <input name="price" type="number" placeholder="Price" class="form-control form-control-solid">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Weight (gram)</label>
                                        <input name="weight" type="number" placeholder="Weight" class="form-control form-control-solid">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Stock</label>
                                        <input name="stock" type="number" placeholder="Stock" class="form-control form-control-solid">
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </form>
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
@stop

@section('pagescripts')
<script src="{{ asset('plugins/image-uploader/image-uploader.min.js') }}"></script>

<script>
    $(document).ready(function (){
        $('.input-images').imageUploader({
            imagesInputName: 'images',
            maxFiles: 10
        });
    });
</script>
@stop