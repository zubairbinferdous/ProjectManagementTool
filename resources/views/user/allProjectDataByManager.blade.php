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


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
