@extends('frontend.layouts.layout')

@section('title')
Compart Shop
@stop

@section('pagestyles')

@stop

@section('content')
<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-15" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Selamat Datang di Compart Shop</h3>
            <!--end::Title-->
            <!--begin::Text-->
            {{-- <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool --}}
            {{-- <br />for different amazing and great useful admin</div> --}}
            <!--end::Text-->
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row w-100 gy-10 mb-md-20">

        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::How It Works Section-->
<!--begin::Statistics Section-->
<div class="mt-sm-n10">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="pb-15 pt-18 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                @foreach ($parts as $part)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-10">
                        <a href="{{ route('part.detail', $part->id) }}">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $part->name }}</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light btnAddToCart" data-id="{{ $part->id }}">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="card-p mb-5 text-dark">Description</div>

                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-300px card-rounded" alt="" src="{{ asset('images/parts/code1.png') }}"/>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->
</div>
<!--end::Statistics Section-->
<!--begin::Team Section-->
{{-- <div class="py-10 py-lg-20">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-12">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our Great Team</h3>
            <!--end::Title-->
            <!--begin::Sub-title-->
            <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to
            <br />integrate and test each extra feature creeps up and haunts most of us.</div>
            <!--end::Sub-title=-->
        </div>
        <!--end::Heading-->
        <!--begin::Slider-->
        <div class="tns tns-default">
            <!--begin::Wrapper-->
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-2.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Paul Miles</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Development Lead</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-3.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Melisa Marcus</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Creative Director</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-4.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">David Nilson</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Python Expert</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-5.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Anne Clarc</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Project Manager</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-6.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Ricky Hunt</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Art Director</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-7.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Alice Wayde</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">Marketing Manager</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="text-center">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/150-8.jpg')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <!--begin::Name-->
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Carles Puyol</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="text-muted fs-6 fw-bold mt-1">QA Managers</div>
                        <!--begin::Position-->
                    </div>
                    <!--end::Person-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
                <span class="svg-icon svg-icon-3x">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Button-->
            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
                <span class="svg-icon svg-icon-3x">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Button-->
        </div>
        <!--end::Slider-->
    </div>
    <!--end::Container-->
</div> --}}
<!--end::Team Section-->
<!--begin::Projects Section-->
{{-- <div class="mb-lg-n15 position-relative z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 150}">Our Projects</h3>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Tabs wrapper-->
                <div class="d-flex flex-center mb-5 mb-lg-15">
                    <!--begin::Tabs-->
                    <ul class="nav border-transparent flex-center fs-5 fw-bold">
                        <li class="nav-item">
                            <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">Development</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Tabs wrapper-->
                <!--begin::Tabs content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-23.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Row-->
                                <div class="row g-10 mb-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_web_design">
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-11.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-11.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Row-->
                                <div class="row g-10 mb-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-20.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Row-->
                                <div class="row g-10 mb-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-16.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-16.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-15.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-23.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_development">
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-15.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('assets/media/stock/600x600/img-15.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Row-->
                                <div class="row g-10 mb-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-22.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-21.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-14.jpg">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tabs content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div> --}}
<!--end::Projects Section-->
@stop

@section('pagescripts')
<script>
    $(".btnAddToCart").on('click', function(e) {
        e.preventDefault();

        var element = $(this);

        $.ajax({
            url: '{{ route("addToCart") }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                part_id: element.attr("data-id"),
                qty: 1
            },
            success: function (response) {
                var cartdiv = $('#cartlist');
                cartdiv.html("");
                var newcarts = response["newcarts"];
                var cartitem = "";
                newcarts.forEach(element => {
                    cartitem += '<a href="{{ route('part.detail', '+element["id"]+') }}">'+
                                    '<div class="menu-item px-5">'+
                                        '<div class="d-flex align-items-center mb-7">'+
                                            '<div class="symbol symbol-50px me-5">'+
                                                '<span class="symbol-label bg-light-success">'+
                                                    '<img class="mw-100 mh-300px card-rounded" alt="" src="{{ asset('images/parts/code1.png') }}" />'+
                                                    '</span>'+
                                                '</div>'+
                                            '<div class="d-flex flex-column">'+
                                                '<a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">'+element["part"]["name"]+' (x'+element["qty"]+')</a>'+
                                                '<span class="text-muted fw-bold">'+formatRupiah(element["part"]["price"], 'Rp. ')+'</span>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</a>';

                });
                cartdiv.html(cartitem);
            }
        });
    });

    /* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
</script>
@stop