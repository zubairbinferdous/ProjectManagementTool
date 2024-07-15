@extends('userIndex')
@section('userContent')
    <style>
        .search-data {
            display: flex;
        }

        .search-data select {
            margin-right: 10px;
        }
    </style>
    <!-- =============== Design & Develop By = MJ MARAZ   ====================== -->




    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <h1 class="text-center bold-taxt " style=""> Balance List </h1>
                    {{-- <form action="" method="GET">
                        <div class="search-data">
                            <select name="year" id="">
                                @foreach ($year as $item)
                                    <option value="{{ $item->year }}"> {{ $item->year }} </option>
                                @endforeach
                            </select>
                            <select name="month" id="">
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
                            <button>search</button>
                        </div>
                    </form> --}}
                    {{-- @php
                        dd($existingRecord);
                    @endphp --}}

                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>NID</th>
                                <th>Paid Salary</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($existingRecord as $item)
                                <tr>
                                    <td>{{ $item->employeeData->EmployeeName }}</td>
                                    <td>{{ $item->employeeData->PhoneNumber }}</td>
                                    <td>{{ $item->employeeData->NidNumber }}</td>
                                    <td>{{ $item->actualSalary }}</td>
                                    <td class=""><span class="badge bg-label-danger">{{ $item->status }}</span>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-right"><strong>Total Salary:</strong></td>
                                <td colspan="2">{{ $totalSalary }}</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
