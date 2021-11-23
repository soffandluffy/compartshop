@extends('frontend.layouts.layout')

@section('title')
Compart Shop
@stop

@section('pagestyles')

@stop

@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-1 my-3">Checkout</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Layout-->
        <!--begin::Form-->
        <form class="form" action="{{ route('submitOrder') }}" method="POST" id="kt_subscriptions_create_new">
            @csrf
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                        <!--begin::Customer-->
                        <div class="card shadow pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Address</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Description-->
                                <div class="text-gray-500 fw-bold fs-5 mb-5">Please enter your address : </div>
                                <!--end::Description-->
                                <!--begin::Selected customer-->
                                <div class="d-flex align-items-center p-3 mb-2">
                                    <textarea name="address" class="form-control form-control-solid" style="height: 100px"></textarea>
                                </div>
                                <div class="text-gray-500 fw-bold fs-5 mb-5">Please enter your phone number : </div>
                                <div class="d-flex align-items-center p-3 mb-2">
                                    <input name="phonenumber" type="number" class="form-control form-control-solid" placeholder="(+62) 812 3456 7890"/>
                                </div>

                                <!--end::Selected customer-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <h4 class="text-gray-900 fw-bold">Please input your full address!</h4>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer-->
                        <!--begin::Pricing-->
                        <div class="card shadow pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Your Order</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 fw-bold gy-4" id="kt_subscription_products_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-300px">Part</th>
                                                <th class="min-w-100px">Qty</th>
                                                <th class="min-w-150px">Total</th>
                                                <th class="min-w-70px text-end">Remove</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600" id="tbodyPart">
                                            @foreach ($carts as $cart)
                                                <tr>
                                                    <td>{{ $cart->part->name }}</td>
                                                    <td>{{ $cart->qty }}</td>
                                                    <td>{{ $cart->part->price }}</td>
                                                    <td class="text-end">
                                                        <!--begin::Delete-->
                                                        <a href="javascript:void(0);" onclick="removeFromCart(this)" class="btnRemoveFromCart btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-id="{{ $cart->part->id }}">
                                                            <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--end::Delete-->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Pricing-->
                        <!--begin::Courier-->
                        <div class="card shadow pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Shipment Method</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Options-->
                                <div id="kt_create_new_payment_method">
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#kt_create_new_courier_1">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">JNE</div>
                                                    <div class="text-muted">Rp. 30.000</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="courier" value="JNE" checked="checked" />
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_courier_2">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">TIKI</div>
                                                    <div class="text-muted">Rp. 30.000</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="courier" value="TIKI" />
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_courier_3">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">POS INDONESIA</div>
                                                    <div class="text-muted">Rp. 30.000</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="courier" value="POS INDONESIA"/>
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Courier-->
                        <!--begin::Payment method-->
                        <div class="card shadow pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Payment Method</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Options-->
                                <div id="kt_create_new_payment_method">
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_1">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">Gopay</div>
                                                    {{-- <div class="text-muted fs-4">082113613388</div> --}}
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method" value="Gopay (082113613388)" checked="checked" />
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_2">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">OVO</div>
                                                    {{-- <div class="text-muted">082113613388</div> --}}
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method" value="OVO (082113613388)" />
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_3">
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder fs-3">BCA</div>
                                                    {{-- <div class="text-muted">1280325089</div> --}}
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method" value="BCA (1280325089)"/>
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Payment method-->
                        <!--begin::Card-->
                        <div class="card shadow pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Note</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Invoice footer-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bolder form-label mb-3">Notes for your order
                                    <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="Add an addition invoice footer note."></i></div>
                                    <!--end::Label-->
                                    <textarea class="form-control form-control-solid rounded-3" name="message" rows="4"></textarea>
                                </div>
                                <!--end::Invoice footer-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                        <!--begin::Card-->
                        <div class="card shadow  pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Summary</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 fs-6">
                                <!--begin::Section-->
                                <div class="mb-5">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Customer details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center mb-1">
                                        <!--begin::Name-->
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary me-2">{{ auth()->user()->name }}</a>
                                        <!--end::Name-->
                                        <!--begin::Status-->
                                        <span class="badge badge-light-success">Active</span>
                                        <!--end::Status-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Email-->
                                    <a href="#" class="fw-bold text-gray-600 text-hover-primary">{{ auth()->user()->email }}</a>
                                    <!--end::Email-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-5"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-5">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Shipment Method</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span id="shipmentMethod" class="badge badge-light-info me-2 fs-3">JNE</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-bold text-gray-600 fs-6">Rp. 30.000</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-5"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-5">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Payment Details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Card info-->
                                        <div id="paymentMethodText" class="fw-bold d-flex align-items-center fs-3">Gopay</div>
                                        <!--end::Card info-->
                                        <!--begin::Card expiry-->
                                        <div id="paymentMethodCode" class="fw-bold text-gray-600">(082113613388)</div>
                                        <!--end::Card expiry-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-5"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-5">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Total</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Card info-->
                                        <div id="totalPriceText" class="fw-bold d-flex text-info align-items-center fs-3 fw-bolder">Rp. {{ number_format($totalprice,0,',','.'); }}</div>
                                        <input type="hidden" name="subtotal" id="totalPrice" value="{{ $totalprice }}">
                                        <!--end::Card info-->
                                        <!--begin::Card expiry-->
                                        {{-- <div class="fw-bold text-gray-600">Expires Dec 2024</div> --}}
                                        <!--end::Card expiry-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <button type="submit" class="btn btn-primary w-100" id="kt_subscriptions_create_button" @if($carts->isEmpty()) disabled @endif>
                                        <!--begin::Indicator-->
                                        <span class="indicator-label">Submit Order</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator-->
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </form>
            <!--end::Form-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
@stop

@section('pagescripts')
<script>
    function removeFromCart(e) {
        var element = $(e);

        $.ajax({
            url: '{{ route("removeFromCart") }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                part_id: element.attr("data-id"),
            },
            success: function (response) {
                var tbodyPart = $('#tbodyPart');
                tbodyPart.html("");
                var newcarts = response["newcarts"];
                var cartitem = "";
                newcarts.forEach(element => {
                    cartitem += '<tr>'+
                                    '<td>'+element["part"]["name"]+'</td>'+
                                    '<td>'+element["qty"]+'</td>'+
                                    '<td>'+element["part"]["price"]+'</td>'+
                                    '<td class="text-end">'+
                                        '<a href="#" onclick="removeFromCart(this)" class="btnRemoveFromCart btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-id="'+element["part"]["id"]+'">'+
                                            '<span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" /><path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" /></g></svg></span>'+
                                        '</a>'+
                                    '</td>'+
                                '</tr>';

                });
                tbodyPart.html(cartitem);
                window.location.reload();
            }
        });
    }

    $("input[name='courier']").on('change', function(){

        $("#shipmentMethod").html(this.value);

    });

    $("input[name='payment_method']").on('change', function(){
        var payment = this.value;
        var text = payment.substr(0,payment.indexOf(' '));
        var code = payment.substr(payment.indexOf(' ')+1);
        $("#paymentMethodText").html(text);
        $("#paymentMethodCode").html(code);

    });

    $(document).ready(function (){
    });
</script>
@stop