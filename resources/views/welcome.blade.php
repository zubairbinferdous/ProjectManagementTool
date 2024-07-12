<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin />
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css?v=') . time() }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}')}}') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}')}}') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>


    <script src="../../assets/js/config.js"></script>

    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
</head>

<style>
    body {

        background-image: url('{{ asset('assets/img/mujib.jpg') }}') !important;
        background-size: cover;
        /* Ensures the background image covers the whole area */
        background-repeat: no-repeat;
        /* Prevents the background image from repeating */
        background-position: 1% -6%;
        /* Centers the background image */
    }
</style>

{{-- @if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
    @endauth
</div>
@endif --}}

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            {{-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                            </svg> --}}
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">LKSS-HRC</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">All Area Pages</span>
                    </li>
                    <!-- Dashboards -->

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards"> Designation Area</div>

                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('addDesignation') }}" class="menu-link">
                                    <div data-i18n="Email">Add Designation </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href=" {{ route('allDesignation') }} " class="menu-link">
                                    <div data-i18n="Email">All Designation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">Project Area</div>

                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('addProject') }}" class="menu-link">
                                    <div data-i18n="Email">Add Project </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('allProject') }}" class="menu-link">
                                    <div data-i18n="Email">All Project </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">Employees Area</div>

                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('addEmployees') }}" class="menu-link">
                                    <div data-i18n="Email">Add Employees </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href=" {{ route('allEmployeeData') }} " class="menu-link">
                                    <div data-i18n="Email">All Employees </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">User Area</div>

                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('registerData') }}" class="menu-link">
                                    <div data-i18n="Email">Add User </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href=" {{ route('allUserArea') }} " class="menu-link">
                                    <div data-i18n="Email">All User </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="avatar ">
                        <a class="" href="{{ url('/dashboard') }}"> <img
                                src="../../assets/img/avatars/logo.jpg" alt class="h-auto rounded-circle" />
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">





                        <h5 class="header-data-area">LKSS HUMAN RESOURCE CENTER (LKSS-HRC)</h5>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href=""
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                    </div>
                                </a>



                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../assets/img/avatars/1.png" alt
                                                            class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::User()->name }}</span>
                                                    <small class="text-muted">{{ Auth::User()->email }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li style="">
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">Profile Page</span>
                                        </a>
                                    </li>

                                    <li style="padding-bottom: 20px">
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">Home Page</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn rounded-pill btn-danger waves-effect waves-light test-center">
                                                    <i class="ti ti-logout me-2 ti-sm"></i>
                                                    <span class="align-middle">Log Out</span></button>

                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>

                    </div>

                    <!-- Search Small Screens -->
                    {{-- <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input type="text" class="form-control search-input container-xxl border-0"
                        placeholder="Search..." aria-label="Search..." />
                    <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                </div> --}}
                </nav>


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            {{-- <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank"
                                        class="fw-semibold">Pixinvent</a>
                                </div>
                                <div>
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                        target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                        class="footer-link me-4">More Themes</a>

                                    <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/"
                                        target="_blank" class="footer-link me-4">Documentation</a>

                                    <a href="https://pixinvent.ticksy.com/" target="_blank"
                                        class="footer-link d-none d-sm-inline-block">Support</a>
                                </div>
                            </div> --}}
                        </div>

                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    @yield('script')
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/dashboards-analytics.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>

    <script src="{{ asset('/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <!-- Flat Picker -->
    <script src="{{ asset('/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- Row Group JS -->
    <script src="{{ asset('/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/tables-datatables-basic.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/form-layouts.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#phone-nid-number').inputmask("9999999999"); // Mask for exactly 7 digits
        });
        $(document).ready(function() {
            $(".search").keyup(function() {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                $.extend($.expr[':'], {
                    'containsi': function(elem, i, match, array) {
                        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf(
                            (match[3] || "").toLowerCase()) >= 0;
                    }
                });

                $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'false');
                });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                    $(this).attr('visible', 'true');
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

                if (jobCount == '0') {
                    $('.no-result').show();
                } else {
                    $('.no-result').hide();
                }
            });
        });
    </script>


</body>

</html>
