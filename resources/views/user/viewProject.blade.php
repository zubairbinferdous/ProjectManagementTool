@extends('userIndex')
@section('userContent')
    <div class="container">
        <div class="row">
            <!-- User Sidebar -->

            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-1">

                <div class="row">
                    <h1 class="text-center bold-taxt " style="padding-bottom:.5%"> {{ $ViewProjectData->ProjectName }}</h1>
                    <div class="card-body">
                        <p class="ProjectDescription" style="padding-bottom:.5%">{{ $ViewProjectData->ProjectDescription }}
                        </p>
                    </div>
                    <div class="col-md-6">

                        <div class="card-body">
                            {{-- <p class="mt-4 small text-uppercase text-muted">Personal Details</p> --}}
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Start Date:</span>
                                        <span> {{ $ViewProjectData->ProjectStart }} </span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Director:</span>
                                        <span> {{ $ViewProjectData->ProjectDirector }} </span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Director Number:</span>
                                        <span> {{ $ViewProjectData->ProjectNumber }} </span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Project Value:</span>
                                        <span>{{ $ViewProjectData->ProjectValue }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Project Capacity:</span>
                                        <span class=" ">{{ $ViewProjectData->TotalCapacity }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Current Working :</span>
                                        <span class=" ">{{ $ViewProjectData->CurrentWorking }}</span>
                                    </li>
                                    {{-- <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Gender:</span>
                                        <span>Author</span>
                                    </li> --}}
                                    {{-- <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">NID:</span>
                                        <span>{{ $ViewEmployeeData->NidNumber }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Contact:</span>
                                        <span>{{ $ViewEmployeeData->PhoneNumber }}</span>
                                    </li> --}}
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            @php

                                // @dump($EmployeeData)
                            @endphp


                            {{-- <p class="mt-4 small text-uppercase text-muted">Professional Details</p> --}}
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Divisions :</span>
                                        <span>{{ $ViewProjectData->ProjectDivisions }}</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Districts :</span>
                                        <span>{{ $ViewProjectData->ProjectDistricts }}</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-semibold me-1">Project Upazilas :</span>
                                        <span>{{ $ViewProjectData->ProjectUpazilas }}</span>
                                    </li>

                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Project support staff name:</span>
                                        <span>{{ $ViewProjectData->StaffName }}</span>
                                    </li>
                                    <li class="mb-2 pt-1">
                                        <span class="fw-semibold me-1">Project support staff number:</span>
                                        <span>{{ $ViewProjectData->StaffNumber }}</span>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Invoice table -->
                <div class="card mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="data_table">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Designation</th>
                                            <th>Project Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($EmployeeData as $item)
                                            <tr>
                                                <td><a
                                                        href="{{ route('viewEmployee', $item->id) }}">{{ $item->EmployeeName }}</a>
                                                </td>
                                                <td>{{ $item->PhoneNumber }}</td>
                                                <td>{{ $item->Designation }}</td>
                                                <td>{{ $item->projectData->ProjectName }}</td>

                                                {{-- @if ($item->status === 'Active')
                                                    <td class=""><span class="badge bg-label-success">paid</span>
                                                    </td>
                                                @else
                                                    <td class=""><span class="badge bg-label-danger">unpaid</span>
                                                    </td>
                                                @endif --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if (Auth::check() && Auth::user()->role == 'admin')
                            <div class="col-12">
                                <div class="data_table">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Designation</th>
                                                <th>Count</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roleCounts as $item)
                                                <tr>

                                                    <td>{{ $item->Designation }}</td>
                                                    <td>{{ $item->total }}</td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>
    </div>
@endsection
