<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">

            {{-- Hero Card --}}
            <div class="row">
                <div class="col-12">
                    <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                        <div class="full-background"
                             style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
                        <div class="card-body text-start p-4 w-100">
                            <h3 class="text-white mb-2">Manage Your Holidays 🌴</h3>
                            <p class="mb-4 font-weight-semibold">
                                Check your requests and track their status.
                            </p>
                            <a href="{{ route('holidays.create') }}" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                                <span class="btn-inner--text">Create New Request</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Holidays Table --}}
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <h6 class="font-weight-semibold text-lg mb-0">Holiday Requests</h6>
                        </div>

                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Employee</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Type</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Start</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">End</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Days</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Status</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vacances as $vacance)
                                        <tr>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $holiday->user->name }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $vacance->type }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $vacance->start_date }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $vacance->end_date }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $holiday->days_number }}</p>
                                            </td>
                                            <td>
                                                <span class="badge badge-sm 
                                                    @if($vacance->status == 'approved') bg-success
                                                    @elseif($vacance->status == 'pending') bg-warning
                                                    @else bg-danger @endif">
                                                    {{ ucfirst($vacance->status) }}
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('holidays.edit', $vacance) }}" class="text-secondary font-weight-bold text-xs me-2" data-bs-toggle="tooltip" title="Edit">
                                                    <!-- Edit Icon SVG -->
                                                </a>
                                                <form action="{{ route('holidays.destroy', $vacance) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link text-danger p-0 m-0" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @if($vacances->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center text-secondary">No holiday requests found.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
