@extends('userIndex')
@section('userContent')
    <!-- =============== Design & Develop By = MJ MARAZ   ====================== -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bold-taxt " style=""> Employee Listes</h1>
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>NID</th>
                                <th>Project Name</th>
                                <th>Last Month Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($EmployeeData as $item)
                                <tr>
                                    <td><a href="{{ route('viewEmployee', $item->id) }}">{{ $item->EmployeeName }}</a></td>
                                    <td>{{ $item->PhoneNumber }}</td>
                                    <td>{{ $item->NidNumber }}</td>
                                    <td>{{ $item->projectData->ProjectName }}</td>
                                    <td class=""><span class="badge bg-label-danger">unpaid</span>
                                    </td>
                                    {{-- @if ($item->Salary)
                                        <td class=""><span class="badge bg-label-success">{{ $item->status }}</span>
                                        </td>
                                    @else
                                        <td class=""><span class="badge bg-label-danger">{{ $item->status }}</span>
                                        </td>
                                    @endif --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
