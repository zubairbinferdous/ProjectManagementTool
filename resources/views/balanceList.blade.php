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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h1 class="text-center bold-taxt " style=""> Balance List </h1>
                    <button type="button" id="selectAll" class="btn btn-success mb-3">Select All Employees</button> <br>
                    <a class="btn btn-primary" href="{{ route('balance') }}">Search Again Or Download Balance List</a>

                    <form action="{{ route('deduct.selected') }}" method="POST">
                        @csrf
                        <button type="submit" name="deduction_type" value="percentage" class="btn btn-primary">Cut
                            5% Employees</button>
                        <button type="submit" name="deduction_type" value="fixed" class="btn btn-primary">Cut 5000
                            Employees</button>


                        <table id="example" class="table table-striped table-bordered">

                            <thead class="table-dark">
                                <tr>
                                    <th>Select</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>NID</th>
                                    <th>Paid Salary</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($existingRecord as $item)
                                    <tr>
                                        <td><input type="checkbox" name="employee_ids[]" value="{{ $item->id }}">
                                        </td>
                                        <td>{{ $item->employeeData->EmployeeName }}</td>
                                        <td>{{ $item->employeeData->PhoneNumber }}</td>
                                        <td>{{ $item->employeeData->NidNumber }}</td>
                                        <td>{{ $item->actualSalary }}</td>

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
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('selectAll').addEventListener('click', function() {
            let checkboxes = document.querySelectorAll('input[name="employee_ids[]"]');
            let allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            checkboxes.forEach((checkbox) => {
                checkbox.checked = !allChecked;
            });
        });
        document.getElementById('button-select').addEventListener('click', function() {
            alart();
        })
    </script>
@endsection
