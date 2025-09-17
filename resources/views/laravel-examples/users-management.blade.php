<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-3 row">
                <div class="col-12">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">User Management</h5>
                                </div>
                                <div class="col-6 text-end">
                                    
                                    <a href="{{ route('addmember.form') }}" class="btn btn-dark  btn-primary"><i class="fas fa-user-plus me-2"></i> Add Member</a>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert" id="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert" id="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-secondary text-center">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Name</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Role</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Creation Date</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
    @foreach ($users as $user)
        <tr>
            <td class="align-middle bg-transparent border-bottom">{{ $user->name }}</td>
            <td class="align-middle bg-transparent border-bottom">{{ $user->email }}</td>
            <td class="text-center align-middle bg-transparent border-bottom">{{ ucfirst($user->role) }}</td>
            <td class="text-center align-middle bg-transparent border-bottom">
                {{ $user->created_at->format('d/m/Y') }}
            </td>
            <td class="text-center align-middle bg-transparent border-bottom">
            <div class="d-flex justify-content-center gap-2">
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                <i class="fas fa-trash"></i> Destroy
                </button>
            </form>   
                <a href="{{ route('profile.show', $user->id) }}" class="btn btn-dark btn-primary">
                <i class="fas fa-user-edit me-2"></i> Show</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark btn-primary">
                <i class="fas fa-user-edit me-2"></i>Edit</a>
            </div>
            </td>
        </tr>
    @endforeach
</tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </main>

</x-app-layout>

<script src="/assets/js/plugins/datatables.js"></script>
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [2, 6],
            sortable: false
        }]
    });
</script>
