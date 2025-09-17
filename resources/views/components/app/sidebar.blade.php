<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0"
           href="{{ route('dashboard') }}" target="_blank">
            <span class="font-weight-bold text-lg"> Ciments Bizerte </span>
        </a>
    </div>
    <div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>dashboard</title>
                            <g id="dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="template" transform="translate(12.000000, 12.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <path class="color-foreground"
                                        d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z"
                                        id="Path"></path>
                                    <path class="color-background"
                                        d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z"
                                        id="Path"></path>
                                    <path class="color-background"
                                        d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z"
                                        id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Route::currentRouteName() == 'holidays' ? 'active' : '' }}" href="{{ route('holidays.index') }}">
                    <div
                        class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>table</title>
                            <g id="table" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="view-grid" transform="translate(12.000000, 12.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <path class="color-foreground"
                                        d="M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z"
                                        id="Path"></path>
                                    <path class="color-background"
                                        d="M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z"
                                        id="Path"></path>
                                    <path class="color-background"
                                        d="M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z"
                                        id="Path"></path>
                                    <path class="color-foreground"
                                        d="M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z"
                                        id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1"> Holidays</span>
                </a>
            </li>
            
            <li class="nav-item mt-2">
                <div class="d-flex align-items-center nav-link">
                   <svg xmlns="http://www.w3.org/2000/svg" 
     width="24" height="24" 
     viewBox="0 0 24 24" 
     fill="currentColor" 
     class="ms-2 w-10 h-10">
  <path d="M19.43 12.98c.04-.32.07-.66.07-1s-.03-.68-.07-1l2.11-1.65a.5.5 0 0 0 .12-.64l-2-3.46a.5.5 0 0 0-.61-.22l-2.49 1a7.03 7.03 0 0 0-1.73-1l-.38-2.65A.5.5 0 0 0 14 2h-4a.5.5 0 0 0-.49.42l-.38 2.65c-.63.24-1.21.56-1.73 1l-2.49-1a.5.5 0 0 0-.61.22l-2 3.46c-.14.23-.09.53.12.64L4.57 10c-.04.32-.07.66-.07 1s.03.68.07 1l-2.11 1.65a.5.5 0 0 0-.12.64l2 3.46c.14.23.42.3.61.22l2.49-1c.52.44 1.1.76 1.73 1l.38 2.65c.04.24.24.42.49.42h4c.25 0 .45-.18.49-.42l.38-2.65c.63-.24 1.21-.56 1.73-1l2.49 1c.19.08.47.01.61-.22l2-3.46a.5.5 0 0 0-.12-.64L19.43 12.98zM12 15.5A3.5 3.5 0 1 1 15.5 12 3.5 3.5 0 0 1 12 15.5z"/>
</svg>

                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-weight-normal text-md ms-2">Administration</span>
                </div>
            </li>
           {{--   --}}
            <li class="nav-item border-start my-0 pt-2">
                <a class="nav-link position-relative ms-0 ps-2 py-2 {{ Route::currentRouteName() == 'users-management' ? 'active' : '' }}"
                    href="{{ route('users-management') }}">
                    <span class="nav-link-text ms-1">Users Management</span>
                </a>
            </li>
             <li class="nav-item border-start my-0 pt-2">
                <a class="nav-link position-relative ms-0 ps-2 py-2 {{ Route::currentRouteName() == 'users-management' ? 'active' : '' }}"
                    href="{{ route('users-management') }}">
                    <span class="nav-link-text ms-1">Vacations</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <div class="d-flex align-items-center nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ms-2"
                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-weight-normal text-md ms-2">Account</span>
                </div>
            </li>
         {{--    <li class="nav-item border-start my-0 pt-2">
                <a class="nav-link position-relative ms-0 ps-2 py-2 {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li> --}}
            <li class="nav-item border-start my-0 pt-2">
    <a href="{{ route('users.edit', Auth::user()->id) }}"
       class="nav-link position-relative ms-0 ps-2 py-2">
        <span class="nav-link-text ms-1">Your Profile</span>
    </a>
</li>

            
        </ul>
    </div>
   
</aside>
