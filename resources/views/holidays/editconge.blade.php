<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Data</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .blurred-input {
      filter: blur(2px);
      cursor: not-allowed;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow-lg">
    <div class="card-header bg-warning text-dark">
      <h5 class="mb-0">Edit Data</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('data.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Section 1: Basic Info -->
        <div class="mb-4">
          <h6 class="text-primary">Section 1: Basic Information</h6>
          <div class="row">
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" name="name" value="{{ old('name', $data->name) }}" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" value="{{ old('email', $data->email) }}" class="form-control">
            </div>
          </div>
        </div>

        <!-- Section 2: Contact -->
        <div class="mb-4">
          <h6 class="text-primary">Section 2: Contact</h6>
          <div class="row">
            <div class="col-md-6">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" value="{{ old('phone', $data->phone) }}" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Address</label>
              <input type="text" name="address" value="{{ old('address', $data->address) }}" class="form-control">
            </div>
          </div>
        </div>

        <!-- Section 3: Role Settings -->
        <div class="mb-4">
          <h6 class="text-primary">Section 3: Role Settings</h6>
          <div class="row">
            <div class="col-md-6">
              <label class="form-label">Role</label>
              <select name="role" id="role" class="form-select" onchange="toggleAdminFields(this.value)">
                <option value="user" {{ old('role', $data->role) == 'user' ? 'selected' : '' }}>User</option>
                <option value="agent" {{ old('role', $data->role) == 'agent' ? 'selected' : '' }}>Agent</option>
                <option value="admin" {{ old('role', $data->role) == 'admin' ? 'selected' : '' }}>Admin</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Access Level</label>
              <input type="text"
                     name="access_level"
                     id="accessLevel"
                     value="{{ old('access_level', $data->access_level) }}"
                     class="form-control @if(auth()->user()->role !== 'admin') blurred-input @endif"
                     @if(auth()->user()->role !== 'admin') disabled @endif>
            </div>
          </div>
        </div>

        <!-- Section 4: Additional Details -->
        <div class="mb-4">
          <h6 class="text-primary">Section 4: Additional Details</h6>
          <textarea name="details" class="form-control" rows="3">{{ old('details', $data->details) }}</textarea>
        </div>

        <!-- Section 5: Status -->
        <div class="mb-4">
          <h6 class="text-primary">Section 5: Status</h6>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="active"
              {{ old('status', $data->status) == 'active' ? 'checked' : '' }}>
            <label class="form-check-label">Active</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="inactive"
              {{ old('status', $data->status) == 'inactive' ? 'checked' : '' }}>
            <label class="form-check-label">Inactive</label>
          </div>
        </div>

        <!-- Submit -->
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-warning">Update Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function toggleAdminFields(role) {
    const accessInput = document.getElementById('accessLevel');
    if (role === 'admin') {
      accessInput.disabled = false;
      accessInput.classList.remove('blurred-input');
    } else {
      accessInput.disabled = true;
      accessInput.classList.add('blurred-input');
    }
  }

  // run on load in case role is already selected
  document.addEventListener("DOMContentLoaded", () => {
    toggleAdminFields(document.getElementById('role').value);
  });
</script>

</body>
</html>
