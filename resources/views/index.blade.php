<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>LKSS HUMAN RESOURCE CENTER (LKSS-HRC)</title>

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
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

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
    <link rel="stylesheet" href="/assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
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
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="avatar ">
                        <a class="" href="{{ url('/dashboard') }}"> <img src="../../assets/img/avatars/logo.jpg"
                                alt class="h-auto rounded-circle" />
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">





                        <h5 class="header-data-area">LKSS HUMAN RESOURCE CENTER (LKSS-HRC)</h5>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="" data-bs-toggle="dropdown">
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
                                    @if (Auth::check() && Auth::user()->role == 'admin')
                                        <li style="">
                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                                <i class="ti ti-user-check me-2 ti-sm"></i>
                                                <span class="align-middle">Profile Page</span>
                                            </a>
                                        </li>
                                    @endif


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

                    <div class="container-xxl  d-flex container-p-y gap-5" style="margin-top: 4%">
                        <!-- Layout Demo -->

                        <div class="container">

                            @if (Auth::check() && Auth::user()->role == 'admin')
                                <div class="row">

                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black"> Project</h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex ">
                                                    <a href="{{ route('allProjectData') }}"
                                                        class="btn btn-primary waves-effect waves-light">view
                                                        project data</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">Employees </h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('allEmployee') }}"
                                                        class="btn btn-primary waves-effect waves-light">view employees
                                                        data</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row" style="margin-top: 3%">
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">Add New Project</h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex ">
                                                    <a href="{{ route('addProject') }}"
                                                        class="btn btn-primary waves-effect waves-light">Add</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">Add New Employees</h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('addEmployees') }}"
                                                        class="btn btn-primary waves-effect waves-light">Add</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">Add New User</h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('registerData') }}"
                                                        class="btn btn-primary waves-effect waves-light">Add</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card" style="margin-top: 2%">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">Add Designation</h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('addDesignation') }}"
                                                        class="btn btn-primary waves-effect waves-light">Add</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card" style="margin-top: 2%">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black">See balance </h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('balance') }}"
                                                        class="btn btn-primary waves-effect waves-light">Balance</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endif

                            @if (Auth::check() && Auth::user()->role == 'manager')
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black"> View Your Projects as manager
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex ">
                                                    <a href="{{ route('viewProjectDataByManager') }}"
                                                        class="btn btn-primary waves-effect waves-light">view
                                                        project data</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title text-black"> View Yours Employees Data as
                                                        manager</h5>
                                                </div>

                                            </div>
                                            <div class="card-body">

                                                <div class="d-flex ">
                                                    <a href="{{ route('viewEmployeeDataBy') }}"
                                                        class="btn btn-primary waves-effect waves-light">view employees
                                                        data</a>
                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <div class="progress w-100" style="height: 8px">
                                                        <div class="progress-bar bg-info" style="width: 70%"
                                                            role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="card" style="margin-top: 2%">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="card-title text-black">See balance </h5>
                                            </div>

                                        </div>
                                        <div class="card-body">

                                            <div class="d-flex ">
                                                <a href="{{ route('balance') }}"
                                                    class="btn btn-primary waves-effect waves-light">Balance</a>
                                            </div>
                                            <div class="d-flex align-items-center mt-4">
                                                <div class="progress w-100" style="height: 8px">
                                                    <div class="progress-bar bg-info" style="width: 70%"
                                                        role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!--/ Layout Demo -->




                            <!--/ Layout Demo -->


                        </div>

                    </div>

                </div>
                <!--/ Layout Demo -->


            </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">

        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

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

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/dashboards-analytics.js') }}"></script>
</body>

</html>
