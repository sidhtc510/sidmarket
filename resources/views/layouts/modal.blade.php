<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Привет!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <form method="POST" action="http://sidmarket/login">
                                    @csrf
                                    <div class="row mb-3"><label for="email"
                                            class="col-md-4 col-form-label text-md-end">Email Address</label>
                                        <div class="col-md-6"><input id="email" type="email" name="email" value=""
                                                required="required" autocomplete="email" autofocus="autofocus"
                                                class="form-control "></div>
                                    </div>
                                    <div class="row mb-3"><label for="password"
                                            class="col-md-4 col-form-label text-md-end">Password</label>
                                        <div class="col-md-6"><input id="password" type="password" name="password"
                                                required="required" autocomplete="current-password"
                                                class="form-control "></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check"><input type="checkbox" name="remember"
                                                    id="remember" class="form-check-input"> <label for="remember"
                                                    class="form-check-label">
                                                    Remember Me
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4"><button type="submit" class="btn btn-primary">
                                                Login
                                            </button> <a href="http://sidmarket/password/reset" class="btn btn-link">
                                                Forgot Your Password?
                                            </a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form method="POST" action="http://sidmarket/register">
                                    @csrf
                                    <div class="row mb-3"><label for="email"
                                            class="col-md-4 col-form-label text-md-end">Email Address</label>
                                        <div class="col-md-6"><input id="email" type="email" name="email" value=""
                                                required="required" autocomplete="email" class="form-control "></div>
                                    </div>
                                    <div class="row mb-3"><label for="password"
                                            class="col-md-4 col-form-label text-md-end">Password</label>
                                        <div class="col-md-6"><input id="password" type="password" name="password"
                                                required="required" autocomplete="new-password" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="row mb-3"><label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                                        <div class="col-md-6"><input id="password-confirm" type="password"
                                                name="password_confirmation" required="required"
                                                autocomplete="new-password" class="form-control"></div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4"><button type="submit" class="btn btn-primary">
                                                Register
                                            </button> 
                                            {{-- <a href="http://sidmarket/login" class="btn btn-link">
                                                I have already registered. Login
                                            </a> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
