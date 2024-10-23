@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Employee</h5>
                    <small class="text-muted float-end">Add Employee</small>
                </div>
                <div class="card-body">

                    {{-- @dd($getEmployees) --}}
                    <form action="{{ route('edit.employe', $getEmployees->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="employee-name">Employee Name</label>
                            <input required type="text" class="form-control" id="employee-name"
                                value="{{ $getEmployees->EmployeeName }}" name="EmployeeName">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="father-name">Employee Father Name</label>
                            <input required type="text" class="form-control" id="father-name"
                                value="{{ $getEmployees->FatherName }}" name="FatherName">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state6">Employee Description </label>
                            <select id="collapsible-state6" required class="select2 form-select" data-allow-clear="true"
                                name="Designation">
                                <option value="{{ $getEmployees->Designation }}">{{ $getEmployees->Designation }}</option>
                                @foreach ($Designation as $item)
                                    <option value="{{ $item->designations }}">{{ $item->designations }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="profile-pic">Employee Profile Picture</label>
                            <input type="file" class="form-control" name="profilePic" id="profile-pic">
                            <img src="{{ $getEmployees->profilePic }}" alt="Profile Picture"
                                style="width: 150px; margin-top: 10px;">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state9">Project name</label>
                            <select id="collapsible-state9" class="select2 form-select" data-allow-clear="true"
                                name="projectName">
                                <option value="{{ $getEmployees->projectData->id }}">
                                    {{ $getEmployees->projectData->ProjectName }}</option>
                                @foreach ($project as $item)
                                    <option value="{{ $item->id }}">{{ $item->ProjectName }}</option>
                                @endforeach
                            </select>
                        </div>





                        <div class="mb-3">
                            <label class="form-label" for="dob">Employee Date Of Birth</label>
                            <input type="text" id="dob" class="form-control dob-picker flatpickr-input"
                                value="{{ $getEmployees->DateOfBirth }}" readonly="readonly" name="DateOfBirth">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="birth-place">Employee Birth Place</label>
                            <input required type="text" class="form-control" id="birth-place"
                                value="{{ $getEmployees->BirthPlace }}" name="BirthPlace">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="phone-number">Employee Phone Number</label>
                            <input required type="number" class="form-control" id="phone-number"
                                value="{{ $getEmployees->PhoneNumber }}" name="PhoneNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="account-number">Employee Account Number</label>
                            <input required type="number" class="form-control" id="account-number"
                                value="{{ $getEmployees->Account }}" name="Account">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="joining-date">Employee Joining Date</label>
                            <input type="text" id="joining-date" class="form-control dob-picker flatpickr-input"
                                value="{{ $getEmployees->JoiningDate }}" readonly="readonly" name="JoiningDate">
                        </div>


                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Appointment Issue Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                value="{{ $getEmployees->DateAppointment }}" readonly="readonly" name="DateAppointment">
                        </div>
                        <br>

                        <div class="mb-3">
                            <label class="form-label" for="actual-joining-date">Employee Actual Joined Date</label>
                            <input type="text" id="actual-joining-date"
                                class="form-control dob-picker flatpickr-input"
                                value="{{ $getEmployees->ActualJoinedDate }}" readonly="readonly"
                                name="ActualJoinedDate">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="nid-number">Employee NID Number</label>
                            <input required type="text" id="nid-number" class="form-control"
                                value="{{ $getEmployees->NidNumber }}" name="NidNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="salary">Employee Salary</label>
                            <input required type="number" id="salary" class="form-control"
                                value="{{ $getEmployees->Salary }}" name="Salary">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state3">Employee Divisions </label>
                            <select id="collapsible-state3" class="select2 form-select" data-allow-clear="true"
                                name="Divisions">
                                <option value="{{ $getEmployees->Divisions }}" selected>{{ $getEmployees->Divisions }}
                                </option>
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
                            <label class="form-label" for="collapsible-state2">Employee Districts</label>
                            <select id="collapsible-state2" class="select2 form-select" data-allow-clear="true"
                                name="Districts">

                                <!-- Display the current district as the selected option -->
                                <option value="{{ $getEmployees->Districts }}" selected>{{ $getEmployees->Districts }}
                                </option>

                                <!-- Other district options -->
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
                            <label class="form-label" for="basic-default-Upazilas">Employee Upazilas</label>
                            <input required type="text" class="form-control" id="basic-default-Upazilas"
                                value="{{ $getEmployees->Upazilas }}" name="Upazilas">
                        </div>



                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file"> CV </label>
                            <input type="file" class="form-control" name="EmployeePdfOne"
                                id="bs-validation-upload-file">

                            @if ($getEmployees->pdf_two)
                                <div class="mt-2">
                                    <label class="form-label">Current CV:</label>
                                    <p>
                                        <a href="{{ asset($getEmployees->pdf_one) }}" target="_blank">
                                            View Current CV
                                        </a>
                                    </p>
                                </div>
                            @endif
                        </div>



                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file"> Appointment Letter </label>
                            <input type="file" class="form-control" name="EmployeePdfTwo"
                                id="bs-validation-upload-file">

                            @if ($getEmployees->pdf_two)
                                <div class="mt-2">
                                    <label class="form-label">Current Appointment Letter:</label>
                                    <p>
                                        <a href="{{ asset($getEmployees->pdf_two) }}" target="_blank">
                                            View Current Appointment Letter
                                        </a>
                                    </p>
                                </div>
                            @endif
                        </div>




                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Joining Letter</label>

                            <!-- Input for uploading a new PDF file -->
                            <input type="file" class="form-control" name="EmployeePdfThree"
                                id="bs-validation-upload-file">

                            <!-- Display current file if available -->
                            @if ($getEmployees->pdf_three)
                                <div class="mt-2">
                                    <label class="form-label">Current Joining Letter:</label>
                                    <p>
                                        <a href="{{ asset($getEmployees->pdf_three) }}" target="_blank">
                                            View Current Joining Letter
                                        </a>
                                    </p>
                                </div>
                            @endif
                        </div>



                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
