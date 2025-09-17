<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit user — Profile</title>

  <!-- Bootstrap (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .header-bg {
      background-image: url("{{ asset('assets/img/header-blue-purple.jpg') }}");
      background-position: bottom;
      background-size: cover;
      min-height: 180px;
    }
    .profile-card {
      position: relative;
      overflow: hidden;
    }
    .profile-pattern {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: .15;
    }
    .avatar-xl {
      width: 96px;
      height: 96px;
      border-radius: 12px;
      overflow: hidden;
      background: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #6c757d;
    }
    .toast-container {
      position: fixed;
      bottom: 1rem;
      right: 1rem;
      z-index: 1080;
    }
  </style>
</head>
<body>

  <!-- header background -->
  <div class="header-bg"></div>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-12">

        <!-- Update form -->
        <form action="{{ route('users.update', $user->id) }}" method="POST">
          @csrf
          @method('PUT')

          <!-- Profile header card -->
          <div class="card card-body profile-card mb-4">
            <img src="{{ asset('assets/img/header-orange-purple.jpg') }}" 
                 alt="pattern" class="profile-pattern">

            <div class="row align-items-center">
              <div class="col-auto">
                <div class="avatar-xl">
                  {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
              </div>

              <div class="col">
                <h5 class="mb-1">{{ $user->name }}</h5>
                <p class="mb-0 text-muted">{{ $user->Title ?? 'No Title' }}</p>
              </div>
            </div>
          </div>

          <!-- Basic Info card -->
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="mb-0">Basic Info</h5>
            </div>
            <div class="card-body">

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Name</label>
                  <input id="name" name="name" type="text" class="form-control" 
                         value="{{ old('name', $user->name) }}" required>
                  @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input id="email" name="email" type="email" class="form-control" 
                         value="{{ old('email', $user->email) }}" required>
                  @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone</label>
                  <input id="phone" name="phone" type="text" class="form-control" 
                         value="{{ old('phone', $user->phone) }}" placeholder="+216 xx xxx xxx">
                  @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                  <label for="Title" class="form-label">Title</label>
                  <input id="Title" name="Title" type="text" class="form-control" 
                         value="{{ old('Title', $user->Title) }}">
                  @error('Title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label for="status" class="form-label">Status</label>
                  <select id="status" name="status" class="form-select">
                    <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                  </select>
                  @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                  <label for="role" class="form-label">Role</label>
                  <select id="role" name="role" class="form-select">
                    <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                  </select>
                  @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
              </div>

              <div class="text-end">
                <a href="{{ route('users-management') }}" class="btn btn-danger">Return</a>
                <button type="submit" class="btn btn-secondary">Save changes</button>
              </div>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Toast container -->
  <div class="toast-container">
    @if(session('success'))
      <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('success') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
    @endif

    @if(session('error'))
      <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('error') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
    @endif
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toastElList = [].slice.call(document.querySelectorAll('.toast'))
      toastElList.map(function (toastEl) {
        const toast = new bootstrap.Toast(toastEl, { delay: 3000 })
        toast.show()
      })
    })
  </script>
</body>
</html>
