<x-app-layout>

    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="pt-7 pb-6 bg-cover"
            style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;">
        </div>
        <div class="container">
            <div class="card card-body py-2 bg-transparent shadow-none">
                <div class="row">
                    <div class="col-auto">
                        <div
                            class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                            <img src="../assets/img/cim.png" alt="profile_image" class="w-100">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h3 class="mb-0 font-weight-bold">
                                {{ $user->name }}
                            </h3>
                            <p class="mb-0">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                        <a href="{{ route('users-management') }}" class="btn btn-sm btn-white">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container my-3 py-3">
            <div class="row">
                <div class="col-12 col-xl-4 mb-4">
                    <div class="card border shadow-xs h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0 font-weight-semibold text-lg">Notifications settings</h6>
                            <p class="text-sm mb-1">Here you can set preferences.</p>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-dark font-weight-semibold mb-1">Account</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">Email me when someone follows me</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault1">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault1">Email me when someone answers on my
                                            post</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault2" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-dark font-weight-semibold mt-2 mb-1">Application</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault3">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault3">New launches and projects</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault4" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault4">Monthly product updates</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pb-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault5">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class=" p-5 mb-4">
                    <div class="card border shadow-xs h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 col-9">
                                    <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                                    <p class="text-sm mb-1">Edit the information about the user .</p>
                                </div>
                                <div class="col-md-4 col-3 text-end">
    <a href="{{ route('users.edit', $user->id) }}">
        <button type="button" class="btn btn-white btn-icon px-2 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
            </svg>
        </button>
    </a>
</div>

                            </div>
                        </div>
                       <div class="card-body p-3">
    <p class="text-sm mb-4">
        Hi, I’m {{ $user->name }}
    </p>
    <ul class="list-group">
        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm">
            <span class="text-secondary">Name:</span> &nbsp; {{ $user->name }}
        </li>
        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
            <span class="text-secondary">Email:</span> &nbsp; {{ $user->email }}
        </li>
        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
            <span class="text-secondary">Mobile:</span> &nbsp; {{ $user->phone ?? 'N/A' }}
        </li>
        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
            <span class="text-secondary">Function / Role:</span> &nbsp; {{ $user->Title ?? 'N/A' }} / {{ $user->role ?? 'N/A' }}
        </li>
        {{-- <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
            <span class="text-secondary">Location:</span> &nbsp; {{ $user->location ?? 'N/A' }}
        </li> --}}
        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
            <span class="text-secondary">Social:</span> &nbsp;
            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="">
                <i class="fab fa-linkedin fa-lg"></i>
            </a>
            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="">
                <i class="fab fa-github fa-lg"></i>
            </a>
            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="...">
                <i class="fab fa-slack fa-lg"></i>
            </a>
        </li>
    </ul>
</div>

                    </div>
                </div>
               
                 
            </div>
           {{--  <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-xs text-muted text-lg-start">
                                Copyright
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                Corporate UI by
                                <a href="https://www.creative-tim.com" class="text-secondary"
                                    target="_blank">Creative Tim</a>.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation"
                                        class="nav-link text-xs text-muted" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license"
                                        class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
   

</x-app-layout>
