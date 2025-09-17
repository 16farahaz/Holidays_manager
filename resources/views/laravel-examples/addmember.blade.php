<x-app-layout>
    <main class="main-content">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        
                        <!-- Formulaire à gauche -->
                        <div class="col-md-4 d-flex flex-column mx-auto order-md-1 order-2">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-black text-dark display-6">Add new member to the team </h3>
                                    <p class="mb-0">New one in the group ! Please enter his details.</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('addmember') }}">
                                        @csrf  
                                           <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                            </div>
                                         
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter phone" required>
                                            </div>
                                        </div>

                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Create a password" required>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Title</label>
                                                <select name="Title" class="form-control" required>
                                                    <option value="">-- Select Title --</option>
                                                    <option value="simple employee">Simple Employee</option>
                                                    <option value="ceo">CEO</option>
                                                    <option value="administrator">Administrator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Role</label>
                                                <select name="role" class="form-control" required>
                                                    <option value="">-- Select Role --</option>
                                                    <option value="simple_user">Simple User</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <label>Status</label>
                                        <div class="mb-3">
                                            <select name="status" class="form-control" required>
                                                <option value="">-- Select Status --</option>
                                                <option value="active">Active</option>
                                                <option value="not_active">Not Active</option>
                                            </select>
                                        </div>

                                       

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Add</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-xs mx-auto">
                                        <a href="{{ route('users-management') }}" class="text-dark font-weight-bold">Go back</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Image à droite -->
                        <div class="col-md-6 order-md-2 order-1">
                            <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                                <div class="oblique-image position-absolute d-flex fixed-top me-auto h-100 z-index-0 bg-cover ms-n8"
                                    style="background-image:url('../assets/img/image-sign-up.jpg')">
                                    <div class="my-auto text-end max-width-350 me-7">
                                        <h1 class="mt-3 text-white font-weight-bolder"> With Ciments Bizerte Start <br> new journey.</h1>
                                        <p class="text-white text-lg mt-4 mb-4"> Create a new account for the employees and manage their issues.</p>
                                    </div>
                                    <div class="text-end position-absolute fixed-bottom me-7">
                                        <h6 class="text-white text-sm mb-5">Ciments 2025 Created By Farah Azizi</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
