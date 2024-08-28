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
                    <form action="{{ route('addProjectData') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Project name</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->ProjectName }}" name="ProjectName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Director name</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->ProjectDirector }}" name="DirectorName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Director number</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->ProjectNumber }}" name="DirectorNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Support staff</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->StaffName }}" name="Supportstaff">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Support number</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->StaffNumber }}" name="Supportnumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Project Value</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $singleProject->ProjectValue }}" name="ProjectValue">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state5"> Project Role Add </label>
                            <select id="collapsible-state5" class="select2 form-select" data-allow-clear="" name="role">
                                <option value="">Select</option>
                                <option value="admin">Admin</option>
                                <option value="projectManager">Project Manager</option>
                                <option value="headManager">Head Manager</option>
                            </select>
                        </div>



                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Project Start Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="{{ $singleProject->ProjectStart }}" readonly="readonly" name="ProjectStart">
                        </div> <br>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Project Description</label>
                            <textarea id="basic-default-message" class="form-control" rows="6"
                                placeholder="{{ $singleProject->ProjectDescription }}" name="ProjectDescription"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state4"> Project Divisions </label>
                            <select id="collapsible-state4" class="select2 form-select" data-allow-clear=""
                                name="ProjectDivisions">
                                <option value="">Select</option>
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
                                <option value="">Select</option>
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
                                placeholder="Project Upazilas" name="ProjectUpazilas">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Project Total Capacity</label>
                            <input required type="number" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="{{ $singleProject->TotalCapacity }}" name="TotalCapacity">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Current Working</label>
                            <input required type="number" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="{{ $singleProject->CurrentWorking }}" name="CurrentWorking">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state3"> Project Status </label>
                            <select id="collapsible-state3" class="select2 form-select" data-allow-clear="true"
                                name="Status">
                                <option value="">Select</option>
                                <option value="Active">Active</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>


                        <div id="">
                            <div class="row">
                                {{-- <div class="col-md-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        id="add_field">Add Designation Field
                                    </button>
                                </div> --}}
                                <div class="col-md-6"></div>
                                <div class="col-md-4"></div>


                                {{-- <div class="col-md-6">
                                    <label class="form-label" for="collapsible-state3"> Description </label>
                                    <select id="collapsible-state3" required class=" form-select" data-allow-clear="true"
                                        name="DescriptionRoll[]">
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
                                </div> --}}

                            </div>

                            <div id="add_designation"></div>

                            {{-- <div class="add_designation">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-state3"> Description </label>
                                        <select id="collapsible-state3" class="select2 form-select"
                                            data-allow-clear="true" name="ProjectDescription">
                                            <option value="">Select</option>
                                            @foreach ($Designation as $item)
                                                <option value="{{ $item->designations }}">{{ $item->designations }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="basic-default-phone">Asign memeber</label>
                                        <input required type="number" id="basic-default-phone"
                                            class="form-control phone-mask" placeholder="Total Capacity"
                                            name="AsignMemeber">
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <br><br><br>

                        {{-- <div class="mb-3">
                            <label class="form-label" for="collapsible-state">Add Employees</label>
                            <select id="collapsible-state" class="select2 form-select" multiple data-allow-clear="true"
                                name="AddUser[]">
                                <option value="">Select Employees</option>
                                @foreach ($EmployeeData as $item)
                                    <option value="{{ $item->EmployeeName }}">{{ $item->EmployeeName }}</option>
                                @endforeach
                            </select>
                        </div> --}}


                        <button type="button" class="btn btn-primary waves-effect waves-light">Submit </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@section('script')
    {{-- <script>
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
    </script> --}}
@endsection
@endsection
