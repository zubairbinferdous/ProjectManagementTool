@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Designation</h5>
                    <small class="text-muted float-end">Add Designation</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('addDesignationData') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Designation Name</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="Designation Name" name="designations">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
