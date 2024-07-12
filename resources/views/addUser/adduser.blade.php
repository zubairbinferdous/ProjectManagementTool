@extends('welcome')
@section('content')
    <div class="authentication-inner py-4">
        <!-- Register Card -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                {{-- <div class="app-brand justify-content-center mb-4 mt-2">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0"></path>
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616">
                                </path>
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0"></path>
                            </svg>
                        </span>
                        <span class="app-brand-text demo text-body fw-bold ms-1">Vuexy</span>
                    </a>
                </div> --}}
                <!-- /Logo -->
                <h4 class="mb-1 pt-2">Add User Area🚀</h4>


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
                        <select name="" id="" class="select2 form-select select2-hidden-accessible">
                            <option value="" data-select2-id="18">Select</option>
                            <option value="Australia" data-select2-id="71">Admin</option>
                            <option value="Bangladesh" data-select2-id="72">Manager</option>
                            <option value="Belarus" data-select2-id="73">Accountant</option>
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
