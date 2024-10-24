@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Project</h5>
                    <small class="text-muted float-end">Add Project</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('edit.project', $singleProject->id) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="project-name">Project Name</label>
                            <input type="text" class="form-control" id="project-name"
                                value="{{ $singleProject->ProjectName }}" name="ProjectName">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="director-name">Director Name</label>
                            <input type="text" class="form-control" id="director-name"
                                value="{{ $singleProject->ProjectDirector }}" name="DirectorName">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="director-number">Director Number</label>
                            <input type="text" class="form-control" id="director-number"
                                value="{{ $singleProject->ProjectNumber }}" name="DirectorNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="support-staff">Support Staff</label>
                            <input type="text" class="form-control" id="support-staff"
                                value="{{ $singleProject->StaffName }}" name="Supportstaff">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="support-number">Support Number</label>
                            <input type="text" class="form-control" id="support-number"
                                value="{{ $singleProject->StaffNumber }}" name="Supportnumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="project-value">Project Value</label>
                            <input type="text" class="form-control" id="project-value"
                                value="{{ $singleProject->ProjectValue }}" name="ProjectValue">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state5"> Project Role Add </label>
                            <select id="collapsible-state5" class="select2 form-select" data-allow-clear="" name="role">


                                @foreach ($User as $item)
                                    @php
                                        $userCheck = $item->role === 'admin';
                                    @endphp

                                    @if ($item->id === $singleProject->role)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @endif
                                    @if (!$userCheck)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>



                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Project Start Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                value="{{ $singleProject->ProjectStart }}" readonly="readonly" name="ProjectStart">
                        </div>

                        <br>

                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Project End Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                value="{{ $singleProject->ProjectEnd }}" readonly="readonly" name="ProjectEnd">
                        </div>

                        <br>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Contract Description</label>
                            <textarea id="basic-default-message" class="form-control" rows="6" placeholder="Contract Description"
                                name="ProjectDescription">{{ $singleProject->ProjectDescription }}</textarea>
                        </div>





                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state4"> Project Divisions </label>
                            <select id="collapsible-state4" class="select2 form-select" data-allow-clear=""
                                name="ProjectDivisions">
                                <option value="{{ $singleProject->ProjectDivisions }}" selected>
                                    {{ $singleProject->ProjectDivisions }}</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Mymensingh">Mymensingh</option>
                            </select>
                        </div>





                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state2"> Project Districts </label>
                            <select id="collapsible-state2" class="select2 form-select" data-allow-clear=""
                                name="ProjectDistricts">
                                <option value="{{ $singleProject->ProjectDistricts }}" selected>
                                    {{ $singleProject->ProjectDistricts }}</option>
                                <option value="Cumilla">Cumilla</option>
                                <option value="Feni">Feni</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Rangamati">Rangamati</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Coxsbazar">Coxsbazar</option>
                                <option value="Khagrachhari">Khagrachhari</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Sirajganj">Sirajganj</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Bogura">Bogura</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Natore">Natore</option>
                                <option value="Joypurhat">Joypurhat</option>
                                <option value="Chapainawabganj">Chapainawabganj</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Satkhira">Satkhira</option>
                                <option value="Meherpur">Meherpur</option>
                                <option value="Narail">Narail</option>
                                <option value="Chuadanga">Chuadanga</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Magura">Magura</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Bagerhat">Bagerhat</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                                <option value="Jhalakathi">Jhalakathi</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojpur">Pirojpur</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Barguna">Barguna</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Moulvibazar">Moulvibazar</option>
                                <option value="Habiganj">Habiganj</option>
                                <option value="Sunamganj">Sunamganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Sherpur">Sherpur</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Netrokona">Netrokona</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-Divisions">Project Upazilas</label>
                            <input required type="text" class="form-control" id="basic-default-Divisions"
                                value="{{ $singleProject->ProjectUpazilas }}" name="ProjectUpazilas">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Project Total Capacity</label>
                            <input required type="number" id="basic-default-phone" class="form-control phone-mask"
                                value="{{ $singleProject->TotalCapacity }}" name="TotalCapacity">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Current Working</label>
                            <input required type="number" id="basic-default-phone" class="form-control phone-mask"
                                value="{{ $singleProject->CurrentWorking }}" name="CurrentWorking">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state3"> Project Status </label>
                            <select id="collapsible-state3" class="select2 form-select" data-allow-clear="true"
                                name="Status">
                                <option value="{{ $singleProject->status }}" selected>{{ $singleProject->status }}
                                </option>
                                <option value="Active">Active</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>

                        {{-- role area   --}}
                        {{-- @foreach ($singleProject->designation as $item)
                            <div class="row">
                                @dd($item)
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-state3"> Description </label>
                                    <select id="collapsible-state3" class=" form-select" data-allow-clear="true"
                                        name="DescriptionRoll[]">
                                        <option value="{{ $item->designation_roll_set }}">
                                            {{ $item->designation_roll_set }}</option>
                                        @foreach ($Designation as $items)
                                            <option value="{{ $items->designations }}">{{ $items->designations }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-phone">Assign member</label>
                                    <input type="number" id="basic-default-phone" class="form-control phone-mask"
                                        value="{{ $item->member }}" name="AssignMember[]">

                                </div>
                            </div>
                        @endforeach

                        <br><br>


                        <div id="">
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        id="add_field">Add Designation Field
                                    </button>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-4"></div>

                            </div>

                            <div id="add_designation"></div>

                        </div>

                        <br><br><br> --}}



                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@section('script')
    <script>
        document.getElementById('add_field').addEventListener('click', function() {
            const addArea = document.getElementById('add_designation');

            const newGroup = document.createElement('div');
            newGroup.classList.add('row');

            newGroup.innerHTML = `

            <div class="col-md-6">
                <label class="form-label" for="collapsible-state3"> Description </label>
                <select id="collapsible-state3" class="select2 form-select"
                    data-allow-clear="true" name="DescriptionRoll[]">
                    <option value="">Select</option>
                    @foreach ($Designation as $item)
                        <option value="{{ $item->designations }}">{{ $item->designations }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="basic-default-phone">Assign member</label>
                <input required type="number" id="basic-default-phone"
                    class="form-control phone-mask" placeholder="Total Capacity"
                    name="AssignMember[]">
            </div>   
            

        `;
            addArea.appendChild(newGroup);
        });
    </script>
@endsection
@endsection
