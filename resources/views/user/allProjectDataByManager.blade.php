@extends('userIndex')
@section('userContent')
    <!-- =============== Design & Develop By = MJ MARAZ   ====================== -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center bold-taxt " style=""> Project Listes</h1>
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Project Name</th>
                                <th>Project State Date</th>
                                <th>Project Director</th>
                                <th>Project Director Number</th>
                                <th>Project Working Capacity</th>
                                <th>Project Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($ProjectData as $item)
                                <tr>
                                    <td><a href="{{ route('viewProjectByManager', $item->id) }}">{{ $item->ProjectName }}</a>
                                    </td>
                                    <td>{{ $item->ProjectStart }}</td>
                                    <td>{{ $item->ProjectDirector }}</td>
                                    <td>{{ $item->ProjectNumber }}</td>
                                    <td>{{ $item->CurrentWorking }}</td>

                                    @if ($item->status === 'Active')
                                        <td class=""><span class="badge bg-label-success">{{ $item->status }}</span>
                                        </td>
                                    @else
                                        <td class=""><span class="badge bg-label-danger">{{ $item->status }}</span>
                                        </td>
                                    @endif

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item"
                                                    href="{{ route('getSingleProject', $item->id) }}"><i
                                                        class="ti ti-pencil me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="{{ route('getProjectData', $item->id) }}"><i
                                                        class="ti ti-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
