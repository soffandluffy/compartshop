<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->

<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
@yield('pagescripts')
<!--end::Page Custom Javascript-->