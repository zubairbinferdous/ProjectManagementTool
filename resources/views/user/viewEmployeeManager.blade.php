@extends('userIndex')
@section('userContent')
    <style>
        .calendar-container {
            display: flex;
            flex-wrap: wrap;
        }

        .calendar-item {
            margin: 10px;
            width: calc(33.333% - 20px);
            /* 3 columns with space between */
            border: 3px solid #757575;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .calendar-item button {
            margin-top: 10px;
            padding: 5px 11px;
            border-radius: 5px;
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-3 col-lg-4 col-md-4 ">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-3 pt-1 mt-4" src="{{ asset($ViewEmployeeData->profilePic) }}"
                                    height="115" width="115" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4> {{ $ViewEmployeeData->EmployeeName }}</h4>
                                    <span class="badge bg-label-secondary mt-1">{{ $ViewEmployeeData->Designation }}</span>
                                </div>
                                {{-- <div class="button-salary mt-3">
                                    <button class="btn btn-primary  waves-light"> Paid Salary </button>
                                </div> --}}
                                <div class="mt-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#modalCenter">
                                        Paid Salary
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">Salary information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="{{ route('balance_data') }}">
                                                    @csrf
                                                    <div class="col mb-3">
                                                        <input type="hidden" id="nameWithTitle" class="form-control"
                                                            value="{{ $ViewEmployeeData->id }}" name="employee_id" readonly>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col mb-3">
                                                                <label for="nameWithTitle" class="form-label">Employee
                                                                    Name</label>
                                                                <input type="text" id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="{{ $ViewEmployeeData->EmployeeName }}"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="col mb-0">
                                                                <label for="emailWithTitle" class="form-label">Actual Salary
                                                                </label>
                                                                <input type="email" id="emailWithTitle"
                                                                    class="form-control"
                                                                    placeholder={{ $ViewEmployeeData->Salary }}
                                                                    @readonly(true)>
                                                            </div>
                                                            <div class="col mb-0">
                                                                <label for="emailWithTitle" class="form-label">Actual Salary
                                                                    Provide
                                                                </label>
                                                                <input type="number" id="emailWithTitle"
                                                                    name="ActualSalaryProvide" class="form-control"
                                                                    required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleFormControlSelect1"
                                                                    class="form-label">Month Of
                                                                    Payment</label>
                                                                <select class="form-select" id="exampleFormControlSelect1"
                                                                    aria-label="Default select example" name="month"
                                                                    required>
                                                                    <option selected=""> Select Month</option>
                                                                    <option value="January">January</option>
                                                                    <option value="February">February</option>
                                                                    <option value="March">March</option>
                                                                    <option value="April">April</option>
                                                                    <option value="May">May</option>
                                                                    <option value="June">June</option>
                                                                    <option value="July">July</option>
                                                                    <option value="August">August</option>
                                                                    <option value="September">September</option>
                                                                    <option value="October">October</option>
                                                                    <option value="November">November</option>
                                                                    <option value="December">December</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="yearSelect" class="form-label">Year Of
                                                                    Joining</label>
                                                                <select class="form-select" id="yearSelect"
                                                                    aria-label="Default select example" name="year"
                                                                    required>
                                                                </select>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button
                                                            class="btn btn-primary d-grid w-100 waves-effect waves-light">Done</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-9 col-lg-8 col-md-8 ">
                <div class="row ">
                    <div class="col-md-6 card">
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

                            <div class="d-flex">

                                <a href="{{ asset($ViewEmployeeData->pdf_one) }}" target="_blank"
                                    class="btn btn-info">Joining latter
                                    1</a>
                                <a href="{{ asset($ViewEmployeeData->pdf_two) }}" target="_blank"
                                    class="btn btn-info">Joining latter
                                    2</a>
                                <a href="{{ asset($ViewEmployeeData->pdf_three) }}" target="_blank"
                                    class="btn btn-info">Joining latter
                                    3</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card">
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
            </div>
        </div>
        <?php
        // Function to generate the months for a specific year
        
        if (!function_exists('generateCalendarForYear')) {
            function generateCalendarForYear($year, $startDate, $currentDate)
            {
                $start = new DateTime($startDate);
                $end = new DateTime("$year-12-31");
        
                // If the start date is after the end of the year, adjust the start date
                if ($start > $end) {
                    $start = new DateTime("$year-01-01");
                }
        
                // If the selected year is the current year, adjust the end date to the current month
                if ($year == date('Y', strtotime($currentDate))) {
                    $end = new DateTime(date('Y-m-t', strtotime($currentDate))); // end of current month
                }
        
                $calendar = [];
        
                // Loop through each month of the selected year up to the current month if it's the current year
                while ($start <= $end) {
                    if ($start->format('Y') == $year) {
                        $calendar[] = $start->format('F Y'); // Format to show full month name and year
                    }
                    $start->modify('first day of next month');
                }
        
                return $calendar;
            }
        }
        
        // Define join date and current date
        $joinDate = $ViewEmployeeData->JoiningDate; // Assuming $ViewEmployeeData is already defined
        $currentDate = date('Y-m-d');
        
        // Determine the selected year
        $selectedYear = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
        
        // Generate the calendar for the selected year
        $calendar = generateCalendarForYear($selectedYear, $joinDate, $currentDate);
        
        ?>



        <div class="container card">
            <h1>Staff Join Calendar</h1>
            <form method="get" action="">
                <label for="year">Select Year:</label>
                <select name="year" id="year">
                    @for ($year = date('Y', strtotime($joinDate)); $year <= date('Y'); $year++)
                        <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                            {{ $year }}</option>
                    @endfor
                </select>
                <button type="submit">Show</button>
            </form>
            <div class="calendar-container">



                @foreach ($calendar as $date)
                    <div class="calendar-item">
                        <span>{{ htmlspecialchars($date) }}</span>

                        @php
                            $existingRecordsArray = [];
                            foreach ($existingRecords as $record) {
                                $existingRecordsArray[] = [
                                    'month' => $record->month,
                                    'year' => $record->year,
                                ];
                            }

                            $dateParts = explode(' ', htmlspecialchars($date));
                            $selectedMonth = ucfirst(strtolower($dateParts[0]));
                            $selectedYear = intval($dateParts[1]);

                        @endphp

                        @foreach ($existingRecordsArray as $record)
                            @if ($selectedMonth === $record['month'] && $selectedYear === $record['year'])
                                <button>Paid </button>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <input type="hidden" id="joiningYear" value="{{ $ViewEmployeeData->JoiningDate }}">

    <script>
        // document.getElementById('dobWithTitle').addEventListener('change', function() {
        //     const date = new Date(this.value);
        //     const month = date.toLocaleString('default', {
        //         month: 'long'
        //     });
        //     const year = date.getFullYear();
        //     document.getElementById('monthYear').value = `${month} ${year}`;
        // });


        const joiningYear = {{ $ViewEmployeeData->JoiningDate }};
        const currentYear = new Date().getFullYear();
        const yearSelect = document.getElementById('yearSelect');

        for (let year = joiningYear; year <= currentYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }

        // Set the current month as the selected option
        const monthSelect = document.getElementById('exampleFormControlSelect1');
        const currentMonth = new Date().toLocaleString('default', {
            month: 'long'
        });
        monthSelect.value = currentMonth;
        yearSelect.value = currentYear;
    </script>
@endsection
