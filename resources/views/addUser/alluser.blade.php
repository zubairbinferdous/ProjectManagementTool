@extends('welcome')
@section('content')
    <!-- DataTable with Buttons -->
    <style>
        .results tr[visible='false'],
        .no-result {
            display: none;
        }

        .results tr[visible='true'] {
            display: table-row;
        }

        .counter {
            padding: 8px;
            color: #ccc;
        }

        .mrl-50 {
            margin: 5px 30px;
        }
    </style>
    <div class="card">
        <h5 class="card-header">User Table Data</h5>
        <div class="form-group pull-right mrl-50">
            <input type="text" class="search form-control" placeholder="Looking for project?">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results ">
            <thead>
                <tr>
                    <th id="">#</th>
                    <th id="" class="col-md-4 col-xs-5"> Name</th>
                    <th id="" class="col-md-3 col-xs-4">Email</th>
                    <th id="" class="col-md-2 col-xs-3">Action</th>
                </tr>
                <tr class="warning no-result">
                    <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($user as $key => $item)
                    <tr>
                        <th scope="row"> {{ $key + 1 }} </th>
                        <td><a href="">{{ $item->name }}</a></td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href=""><i class="ti ti-pencil me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href=""><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <hr class="my-5" />
@endsection
