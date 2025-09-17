<x-app-layout>

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8"
                                    style="background-image:url('../assets/img/image-sign-up.jpg')">
                                    <div class="my-auto text-start max-width-350 ms-7">
                                        <h1 class="mt-3 text-white font-weight-bolder"> With Ciemnts Bizerte Start  <br> new journey.</h1>
                                        <p class="text-white text-lg mt-4 mb-4"> Create a new account for the emplyees and manage there issues .</p>
                                        
                                    </div>
                                    <div class="text-start position-absolute fixed-bottom ms-7">
                                        <h6 class="text-white text-sm mb-5">Ciments 2025 Created By Farah Azizi</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                                    <p class="mb-0">New one in the team ! Please enter his details.</p>
                                </div>
                                <div class="card-body">
                                   <form role="form" method="POST" action="{{ route('signup.post') }}">
    @csrf

    <label>Name And LastName</label>
    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
    </div>

    <label>Phone Number</label>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
    </div>
    <label>Email Address</label>
    <div class="mb-3">
        <input type="number" name="phone" class="form-control" placeholder="Enter yourphone number" required>
    </div>

    <label>Password</label>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Create a password" required>
    </div>

    <!-- Title dropdown -->
    <label>Title</label>
    <div class="mb-3">
        <select name="Title" class="form-control" required>
            <option value="">-- Select Title --</option>
            <option value="simple employee">Simple Employee</option>
            <option value="ceo">CEO</option>
            <option value="administrator">Administrator</option>
        </select>
    </div>

    <!-- Role dropdown -->
    <label>Role</label>
    <div class="mb-3">
        <select name="role" class="form-control" required>
            <option value="">-- Select Role --</option>
            <option value="simple_user">Simple User</option>
            <option value="admin">Admin</option>
        </select>
    </div>

    <!-- Status dropdown -->
    <label>Status</label>
    <div class="mb-3">
        <select name="status" class="form-control" required>
            <option value="">-- Select Status --</option>
            <option value="active">Active</option>
            <option value="not_active">Not Active</option>
        </select>
    </div>

    <div class="form-check form-check-info text-left mb-0">
        <input class="form-check-input" type="checkbox" name="terms" value="1" id="flexCheckDefault">
        <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
            I agree to the <a href="#" class="text-dark font-weight-bold">Terms and Conditions</a>.
        </label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign up</button>
    </div>
</form>


                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-xs mx-auto">
                                        Already have an account?
                                        <a href="javascript:;" class="text-dark font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
