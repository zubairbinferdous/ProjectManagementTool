@extends('userIndex')
@section('userContent')
    <style>
        .red-bg {
            background-color: rgba(255, 0, 0, 0.651) !important;
        }

        .yellow-bg {
            background-color: rgba(201, 201, 11, 0.829) !important;
        }

        .green-bg {
            background-color: rgba(218, 188, 21, 0.651) !important;
        }

        .blue-bg {
            background-color: rgb(240, 240, 240) !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bold-taxt">Employee Lists</h1>
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>NID</th>
                                <th>Project Name</th>
                                <th>edit</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($EmployeeData as $item)
                                @php
                                    $statusColor = getPaymentStatusColor($item->id);
                                @endphp
                                <tr
                                    @if ($statusColor == 'red') class="red-bg"
                                @elseif ($statusColor == 'yellow') class="yellow-bg"
                                @elseif ($statusColor == 'green') class="green-bg"
                                @elseif ($statusColor == 'blue') class="blue-bg" @endif>
                                    <td><a href="{{ route('viewEmployee', $item->id) }}">{{ $item->EmployeeName }}</a></td>

                                    <td>{{ $item->PhoneNumber }}</td>
                                    <td>{{ $item->NidNumber }}</td>
                                    <td>{{ $item->projectData->ProjectName }}</td>
                                    <td> <a class="dropdown-item" href="{{ route('getSingleEmployee', $item->id) }}"><i
                                                class="ti ti-pencil me-1"></i>
                                            Edit</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
