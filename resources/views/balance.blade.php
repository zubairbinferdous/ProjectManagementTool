@extends('userIndex')
@section('userContent')
    <style>
        .search-data {
            /* display: flex; */
        }

        .search-data .mb-3 {
            margin-right: 10px;
        }
    </style>
    <!-- =============== Design & Develop By = MJ MARAZ   ====================== -->




    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <h1 class="text-center bold-taxt " style=""> Balance Area</h1>
                    <form action="{{ route('balanceList') }}" method="GET">
                        @csrf
                        <div class="search-data">
                            <div class="mb-3">
                                <label class="form-label" for="collapsible-state19">Select Year</label>
                                <select id="collapsible-state19" class="select2 form-select" data-allow-clear="true"
                                    name="year" required>
                                    @foreach ($year as $item)
                                        <option value="{{ $item->year }}"> {{ $item->year }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="collapsible-state20">Select Month</label>
                                <select id="collapsible-state20" class="select2 form-select" data-allow-clear="true"
                                    name="month" required>
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


                            <button class="btn btn-success" type="submit" name="balance" value="balanceList">Search Balance
                                List </button>


                            <button class="btn btn-success" type="submit" name="balance" value="balancePDF">Download
                                Balance List </button>
                            <button class="btn btn-success" type="submit" name="balance" value="balancePDF">Download
                                Balance Note </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
