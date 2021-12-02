@extends('frontend.layouts.layout')

@section('title')
Compart Shop
@stop

@section('pagestyles')

@stop

@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                <!--begin::Card-->
                <div class="card shadow mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="{{ asset('images/parts/code1.png') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $part->name }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-5 fw-bold text-muted mb-6">{{ $part->category }}</div>
                            <!--end::Position-->
                            <!--begin::Position-->
                            <div class="fs-5 fw-bold text-muted mb-6">{{ $part->brand }}</div>
                            <!--end::Position-->
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    {{-- <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                    </li> --}}
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    {{-- <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Statements</a>
                    </li> --}}
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card shadow pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Part Detail</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-primary me-5"></span> <span class="fs-3 fw-bold">Description</span>

                                    </li>
                                    <p>{!! $part->description !!}</p>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-primary me-5"></span> <span class="fs-3 fw-bold">Price</span>

                                    </li>
                                    <p>@currency($part->price)</p>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-primary me-5"></span> <span class="fs-3 fw-bold">Weight</span>

                                    </li>
                                    <p>{{ $part->weight }} (gram)</p>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-primary me-5"></span> <span class="fs-3 fw-bold">Stock</span>

                                    </li>
                                    <p>{{ $part->stock }}</p>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card shadow pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Logs</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotone/Files/Download.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000)" x="11" y="1" width="2" height="14" rx="1" />
                                                <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Download Report</button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                        <!--begin::Table body-->
                                        <tbody>
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-warning">404 WRN</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/customer/c_610d48506e446/not_found</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">25 Jul 2021, 8:43 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoice/in_1682_1117/invalid</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">20 Dec 2021, 11:30 am</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoice/in_3487_7615/invalid</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">10 Mar 2021, 6:43 am</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoice/in_3487_7615/invalid</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">15 Apr 2021, 5:30 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-success">200 OK</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoices/in_2567_1989/payment</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">25 Oct 2021, 5:20 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-success">200 OK</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoices/in_9658_7414/payment</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">10 Nov 2021, 10:30 am</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-success">200 OK</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoices/in_7714_6762/payment</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">25 Oct 2021, 2:40 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-warning">404 WRN</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/customer/c_610d48506e446/not_found</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">10 Mar 2021, 10:10 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoice/in_1682_1117/invalid</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">10 Nov 2021, 10:30 am</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Badge=-->
                                                <td class="min-w-70px">
                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                </td>
                                                <!--end::Badge=-->
                                                <!--begin::Status=-->
                                                <td>POST /v1/invoice/in_9980_6705/invalid</td>
                                                <!--end::Status=-->
                                                <!--begin::Timestamp=-->
                                                <td class="pe-0 text-end min-w-200px">25 Oct 2021, 5:30 pm</td>
                                                <!--end::Timestamp=-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card shadow pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Events</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotone/Files/Download.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000)" x="11" y="1" width="2" height="14" rx="1" />
                                                <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Download Report</button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">Invoice
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                            <span class="badge badge-light-danger">Declined</span></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2021, 11:05 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">Invoice
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                            <span class="badge badge-light-succees me-1">In Transit</span>to
                                            <span class="badge badge-light-success">Approved</span></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2021, 8:43 pm</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2021, 10:30 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">Invoice
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
                                            <span class="badge badge-light-info me-1">In Progress</span>to
                                            <span class="badge badge-light-primary">In Transit</span></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2021, 5:30 pm</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2021, 10:30 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2021, 9:23 pm</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2021, 10:10 pm</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2021, 11:30 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">Invoice
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                            <span class="badge badge-light-danger">Declined</span></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2021, 6:43 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Event=-->
                                            <td class="min-w-400px">
                                            <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                            <a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
                                            <!--end::Event=-->
                                            <!--begin::Timestamp=-->
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2021, 10:30 am</td>
                                            <!--end::Timestamp=-->
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                        <!--begin::Earnings-->
                        <div class="card shadow mb-6 mb-xl-9">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <h2>Earnings</h2>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <div class="fs-5 fw-bold text-gray-500 mb-4">Last 30 day earnings calculated. Apart from arranging the order of topics.</div>
                                <!--begin::Left Section-->
                                <div class="d-flex flex-wrap flex-stack mb-5">
                                    <!--begin::Row-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                                <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Net Earnings</span>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                            <span class="" data-kt-countup="true" data-kt-countup-value="16">0</span>%
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-down.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                        <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></span>
                                            <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Change</span>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                            <span class="fs-1 fw-bolder text-gray-800 lh-1">
                                                <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
                                                <span class="text-primary">--</span>
                                            </span>
                                            <span class="fs-6 fw-bold text-muted d-block lh-1 pt-2">Fees</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <a href="#" class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw Earnings</a>
                                </div>
                                <!--end::Left Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Earnings-->
                        <!--begin::Statements-->
                        <div class="card shadow mb-6 mb-xl-9">
                            <!--begin::Header-->
                            <div class="card-header">
                                <!--begin::Title-->
                                <div class="card-title">
                                    <h2>Statement</h2>
                                </div>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_1">This Year</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_2">2020</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_3">2019</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_4">2018</a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pb-5">
                                <!--begin::Tab Content-->
                                <div id="kt_customer_view_statement_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="w-125px">Date</th>
                                                    <th class="w-100px">Order ID</th>
                                                    <th class="w-300px">Details</th>
                                                    <th class="w-100px">Amount</th>
                                                    <th class="w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>Nov 01, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2021</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_view_statement_2" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_view_statement_table_2" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="w-125px">Date</th>
                                                    <th class="w-100px">Order ID</th>
                                                    <th class="w-300px">Details</th>
                                                    <th class="w-100px">Amount</th>
                                                    <th class="w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>May 30, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2020</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_view_statement_3" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_view_statement_table_3" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="w-125px">Date</th>
                                                    <th class="w-100px">Order ID</th>
                                                    <th class="w-300px">Details</th>
                                                    <th class="w-100px">Amount</th>
                                                    <th class="w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>Feb 09, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_view_statement_4" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_view_statement_table_4" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4">
                                            <!--begin::Table head-->
                                            <thead class="border-bottom border-gray-200">
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="w-125px">Date</th>
                                                    <th class="w-100px">Order ID</th>
                                                    <th class="w-300px">Details</th>
                                                    <th class="w-100px">Amount</th>
                                                    <th class="w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>Nov 01, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2018</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Feb 09, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td>Visual Design Illustration</td>
                                                    <td class="text-success">$31.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td>Abstract Vusial Pack</td>
                                                    <td class="text-success">$52.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 04, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sep 15, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                                    <td class="text-success">$5.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nov 01, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td>Darknight transparency 36 Icons Pack</td>
                                                    <td class="text-success">$38.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 24, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Oct 08, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                                    <td class="text-success">$76.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>May 30, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td>Seller Fee</td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apr 22, 2019</td>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td>Parcel Shipping / Delivery Service App</td>
                                                    <td class="text-success">$204.00</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Statements-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
        <!--begin::Modals-->
        <!--begin::Modal - Add Payment-->
        <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Add a Payment Record</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_modal_add_payment_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mb-2">
                                    <span class="required">Invoice Number</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="The invoice number must be unique."></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="invoice" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Status</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bolder" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                    <option></option>
                                    <option value="0">Approved</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Rejected</option>
                                    <option value="3">In progress</option>
                                    <option value="4">Completed</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Invoice Amount</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="amount" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-15">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mb-2">
                                    <span class="required">Additional Information</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Information such as description of invoice or product purchased."></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
                                <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--begin::Modal - Adjust Balance-->
        <div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Adjust Balance</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Balance preview-->
                        <div class="d-flex text-center mb-9">
                            <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                <div class="fs-6 fw-bold mb-2 text-muted">Current Balance</div>
                                <div class="fs-2 fw-bolder" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
                            </div>
                            <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                <div class="fs-6 fw-bold mb-2 text-muted">New Balance
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter an amount to preview the new balance."></i></div>
                                <div class="fs-2 fw-bolder" kt-modal-adjust-balance="new_balance">--</div>
                            </div>
                        </div>
                        <!--end::Balance preview-->
                        <!--begin::Form-->
                        <form id="kt_modal_adjust_balance_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Adjustment type</label>
                                <!--end::Label-->
                                <!--begin::Dropdown-->
                                <select class="form-select form-select-solid fw-bolder" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true">
                                    <option></option>
                                    <option value="1">Credit</option>
                                    <option value="2">Debit</option>
                                </select>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Amount</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mb-2">Add adjustment note</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Disclaimer-->
                            <div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
                            <!--end::Disclaimer-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
                                <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--begin::Modal - New Address-->
        <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_modal_update_customer_form">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_update_customer_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Update Customer</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                            <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                            <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                                            <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <div class="fs-6 text-gray-700">Updating customer details will receive a privacy audit. For more info, please read our
                                            <a href="#">Privacy Policy</a></div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::User toggle-->
                                <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span></div>
                                <!--end::User toggle-->
                                <!--begin::User form-->
                                <div id="kt_modal_update_customer_user_info" class="collapse show">
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span>Update Avatar</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-2.jpg)"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span>Email</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::User form-->
                                <!--begin::Billing toggle-->
                                <div class="fw-bolder fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info">Shipping Information
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span></div>
                                <!--end::Billing toggle-->
                                <!--begin::Billing form-->
                                <div id="kt_modal_update_customer_billing_info" class="collapse">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Address Line 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Address Line 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="address2" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Town</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-7">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">State / Province</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Post Code</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span>Country</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_customer" class="form-select form-select-solid fw-bolder">
                                            <option value="">Select a Country...</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VI">Virgin Islands</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold">Use as a billing adderess?</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label fw-bold text-muted" for="kt_modal_update_customer_billing">Yes</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--begin::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Billing form-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - New Address-->
        <!--begin::Modal - New Card-->
        <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Add New Card</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                        <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_modal_new_card_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Name On Card</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                    <!--end::Input-->
                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                <option></option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">CVV</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->
                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
                                            <span class="svg-icon svg-icon-2hx">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
                                                        <rect fill="#000000" x="2" y="8" width="20" height="3" />
                                                        <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                    <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted">Save Card</span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@stop

@section('pagescripts')

<script>
</script>
@stop