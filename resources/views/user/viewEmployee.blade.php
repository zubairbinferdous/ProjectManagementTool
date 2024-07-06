@extends('userIndex')
@section('userContent')
    <div class="container">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-3 pt-1 mt-4" src="{{ asset($ViewEmployeeData->profilePic) }}"
                                    height="100" width="200" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $ViewEmployeeData->EmployeeName }}</h4>
                                    <span class="badge bg-label-secondary mt-1">{{ $ViewEmployeeData->Designation }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <td><a href="{{ asset($ViewEmployeeData->Pdf_one) }}" target="_blank">PDF ONE : Joining latter</a></td>
                <td>
                    <a href="{{ asset($ViewEmployeeData->Pdf_one) }}" target="_blank" class="btn btn-info">View</a>
                </td> <br> <br>
                <td><a href="{{ asset($ViewEmployeeData->Pdf_two) }}" target="_blank">PDF Two : Joining latter</a></td>
                <td>
                    <a href="{{ asset($ViewEmployeeData->Pdf_two) }}" target="_blank" class="btn btn-info">View</a>
                </td><br> <br>
                <td><a href="{{ asset($ViewEmployeeData->Pdf_three) }}" target="_blank">PDF Three : Joining latter</a></td>
                <td>
                    <a href="{{ asset($ViewEmployeeData->Pdf_three) }}" target="_blank" class="btn btn-info">View</a>
                </td><br> <br>
                <!-- /User Card -->
                <!-- Plan Card -->

                <!-- /Plan Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

                <div class="row">
                    <h1> {{ $ViewEmployeeData->EmployeeName }}</h1>
                    <div class="col-md-6">

                        <div class="card-body">
                            <p class="mt-4 small text-uppercase text-muted">Personal Details</p>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Date Of Birth:</span>
                                        <span> {{ $ViewEmployeeData->DateOfBirth }} </span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Birth Place:</span>
                                        <span>{{ $ViewEmployeeData->BirthPlace }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Father's Name:</span>
                                        <span class=" ">{{ $ViewEmployeeData->FatherName }}</span>
                                    </li>
                                    {{-- <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Gender:</span>
                                        <span>Author</span>
                                    </li> --}}
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">NID:</span>
                                        <span>{{ $ViewEmployeeData->NidNumber }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Contact:</span>
                                        <span>{{ $ViewEmployeeData->PhoneNumber }}</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">

                            <p class="mt-4 small text-uppercase text-muted">Professional Details</p>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project :</span>
                                        <span>{{ $ViewEmployeeData->projectData->ProjectName }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Designation :</span>
                                        <span>{{ $ViewEmployeeData->Designation }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">District:</span>
                                        <span class="">{{ $ViewEmployeeData->Districts }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Upazilla:</span>
                                        <span>{{ $ViewEmployeeData->Upazilas }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Salary:</span>
                                        <span>{{ $ViewEmployeeData->Salary }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Joining Date:</span>
                                        <span>{{ $ViewEmployeeData->JoiningDate }}</span>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Invoice table -->
                <div class="card mb-4">
                    <div class="table-responsive mb-3">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row mx-4">
                                <div
                                    class="col-sm-6 col-12 d-flex align-items-center justify-content-center justify-content-sm-start mb-3 mb-md-0">
                                    <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select
                                                name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"
                                                class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div
                                    class="col-sm-6 col-12 d-flex align-items-center justify-content-center justify-content-sm-end">
                                    <div class="dt-buttons"><button
                                            class="dt-button buttons-collection btn btn-label-secondary dropdown-toggle float-sm-end mb-3 mb-sm-0"
                                            tabindex="0" aria-controls="DataTables_Table_1" type="button"
                                            aria-haspopup="dialog" aria-expanded="false"><span><i
                                                    class="ti ti-screen-share ti-xs me-2"></i>Export</span><span
                                                class="dt-down-arrow">▼</span></button> </div>
                                </div>
                            </div>
                            <table class="table datatable-invoice border-top dataTable no-footer dtr-column"
                                id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                <thead>
                                    <tr>
                                        <th class="control sorting dtr-hidden" tabindex="0"
                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                            style="width: 36.4531px; display: none;"
                                            aria-label=": activate to sort column ascending"></th>
                                        <th class="sorting sorting_desc" tabindex="0"
                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                            style="width: 63.4531px;" aria-sort="descending"
                                            aria-label="ID: activate to sort column ascending">ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1" style="width: 74.4531px;"
                                            aria-label=": activate to sort column ascending"><i
                                                class="ti ti-trending-up"></i>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1" style="width: 119.359px;"
                                            aria-label="Total: activate to sort column ascending">Total</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1" style="width: 207.672px;"
                                            aria-label="Issued Date: activate to sort column ascending">Issued Date</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 148.609px;" aria-label="Actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td valign="top" colspan="5" class="dataTables_empty">Loading...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mx-4">
                                <div class="col-md-12 col-lg-6 text-center text-lg-start pb-md-2 pb-lg-0">
                                    <div class="dataTables_info" id="DataTables_Table_1_info" role="status"
                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div>
                                <div class="col-md-12 col-lg-6 d-flex justify-content-center justify-content-lg-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="DataTables_Table_1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_1_previous"><a href="#"
                                                    aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item next disabled"
                                                id="DataTables_Table_1_next">
                                                <a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1"
                                                    tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->


        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <h1 class="year">2024</h1>
                    <div class="calendar">

                        <div class="month" id="january">
                            <h2>January</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="february">
                            <h2>February</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="march">
                            <h2>March</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="april">
                            <h2>April</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="may">
                            <h2>May</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="june">
                            <h2>June</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="july">
                            <h2>July</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="august">
                            <h2>August</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="september">
                            <h2>September</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="october">
                            <h2>October</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="november">
                            <h2>November</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                        <div class="month" id="december">
                            <h2>December</h2>
                            <button class="btn">paid</button>
                            <br>
                            <!-- <button class="btn">add note</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
