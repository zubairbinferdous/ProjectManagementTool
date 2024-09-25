@extends('welcome')
@section('content')
    <div class="authentication-inner py-4">
        <!-- Register Card -->
        <div class="card">
            <div class="card-body">

                <h4 class="mb-1 pt-2">Add User Area</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ route('registerUserData') }}" novalidate="novalidate">

                    @csrf
                    <div class="mb-3 fv-plugins-icon-container">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="name"
                            placeholder="Enter your username" autofocus="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="mb-3 fv-plugins-icon-container">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter your email">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <div class="mb-3 fv-plugins-icon-container">
                        <label for="email" class="form-label">Roll</label>
                        <select name="role" id="" class="select2 form-select select2-hidden-accessible">
                            <option value="" data-select2-id="18">Select</option>
                            <option value="admin" data-select2-id="71">Admin</option>
                            <option value="manager" data-select2-id="72"> Manager</option>
                        </select>
                    </div>



                    <div class="mb-3 form-password-toggle fv-plugins-icon-container">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge has-validation">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="mb-3 form-password-toggle fv-plugins-icon-container">
                        <label class="form-label" for="password">Confirm Password</label>
                        <div class="input-group input-group-merge has-validation">
                            <input type="password" id="password" class="form-control" name="password_confirmation"
                                placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>


                    {{-- <div class="mb-3 fv-plugins-icon-container">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                            <label class="form-check-label" for="terms-conditions">
                                I agree to
                                <a href="javascript:void(0);">privacy policy &amp; terms</a>
                            </label>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div> --}}
                    <button class="btn btn-primary d-grid w-100 waves-effect waves-light">Sign up</button>
                    <input type="hidden">
                </form>

                {{-- <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="auth-login-basic.html">
                        <span>Sign in instead</span>
                    </a>
                </p>

                <div class="divider my-4">
                    <div class="divider-text">or</div>
                </div> --}}

                {{-- <div class="d-flex justify-content-center">
                    <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3 waves-effect">
                        <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                    </a>

                    <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3 waves-effect">
                        <i class="tf-icons fa-brands fa-google fs-5"></i>
                    </a>

                    <a href="javascript:;" class="btn btn-icon btn-label-twitter waves-effect">
                        <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                    </a>
                </div> --}}
            </div>
        </div>
        <!-- Register Card -->
    </div>
@endsection
