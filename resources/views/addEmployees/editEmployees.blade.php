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
                    <form action="{{ route('addEmployeeData') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname"> Employee Name</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $getEmployees->EmployeeName }}" name="EmployeeName">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname"> Employee Father Name</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $getEmployees->FatherName }}" name="FatherName">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Employee Profile Picture </label>
                            <input type="file" class="form-control" name="profilePic" id="bs-validation-upload-file"
                                required="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state9">Project name</label>
                            <select id="collapsible-state9" class="select2 form-select" data-allow-clear="true"
                                name="projectName">
                                <option value="">Select</option>
                                @foreach ($project as $item)
                                    <option value="{{ $item->id }}">{{ $item->ProjectName }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Employee Date Of Birth</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="{{ $getEmployees->DateOfBirth }}" readonly="readonly" name="DateOfBirth">
                        </div> <br>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Employee Birth Place</label>
                            <input required type="text" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $getEmployees->BirthPlace }}" name="BirthPlace">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Employee Phone Number</label>
                            <input required type="number" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $getEmployees->PhoneNumber }}" name="PhoneNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Employee Account Number</label>
                            <input required type="number" class="form-control" id="basic-default-fullname"
                                placeholder="{{ $getEmployees->Account }}" name="Account">
                        </div>


                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Employee Joining Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="{{ $getEmployees->JoiningDate }}" readonly="readonly" name="JoiningDate">
                        </div>
                        <br>
                        <div class="md-3">
                            <label class="form-label" for="multicol-birthdate">Employee Actual Joined Date</label>
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="{{ $getEmployees->ActualJoinedDate }}" readonly="readonly"
                                name="ActualJoinedDate">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="phone-nid-number">Employee Nid Number</label>
                            <input required type="text" id="phone-nid-number" class="form-control "
                                placeholder="{{ $getEmployees->NidNumber }}" name="NidNumber">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state6">Employee Description </label>
                            <select id="collapsible-state6" required class="select2 form-select" data-allow-clear="true"
                                name="Designation">
                                <option value="">Select</option>
                                @foreach ($Designation as $item)
                                    <option value="{{ $item->designations }}">{{ $item->designations }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Employee Salary</label>
                            <input required type="number" id="basic-default-phone" class="form-control "
                                placeholder="{{ $getEmployees->Salary }}" name="Salary">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="collapsible-state3">Employee Divisions </label>
                            <select id="collapsible-state3" class="select2 form-select" data-allow-clear="true"
                                name="Divisions">
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
                            <label class="form-label" for="collapsible-state2">Employee Districts </label>
                            <select id="collapsible-state2" class="select2 form-select" data-allow-clear="true"
                                name="Districts">
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
                            <label class="form-label" for="basic-default-Divisions">Employee Upazilas</label>
                            <input required type="text" class="form-control" id="basic-default-Divisions"
                                placeholder="Employee Upazilas" name="Upazilas">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Employee PDF 1 </label>
                            <input type="file" class="form-control" name="EmployeePdfOne"
                                id="bs-validation-upload-file" required="">
                        </div>



                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Employee PDF 2 </label>
                            <input type="file" class="form-control" name="EmployeePdfTwo"
                                id="bs-validation-upload-file" required="">
                        </div>




                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Employee PDF 3 </label>
                            <input type="file" class="form-control" name="EmployeePdfThree"
                                id="bs-validation-upload-file" required="">
                        </div>



                        <button type="button" class="btn btn-primary waves-effect waves-light">Submit </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
