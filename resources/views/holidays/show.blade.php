<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg rounded-3">
        <div class="card-header bg-primary text-white">
            <h4>Vacation Details for {{ $vacation->user->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Employee:</strong> {{ $vacation->user->name }}</p>
            <p><strong>Email:</strong> {{ $vacation->user->email }}</p>
            <p><strong>Start Date:</strong> {{ $vacation->start_date }}</p>
            <p><strong>End Date:</strong> {{ $vacation->end_date }}</p>
            <p><strong>Reason:</strong> {{ $vacation->reason }}</p>
            <p>
                <strong>Status:</strong>
                @if($vacation->status === 'approved')
                    <span class="badge bg-success">Approved</span>
                @elseif($vacation->status === 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @else
                    <span class="badge bg-danger">Rejected</span>
                @endif
            </p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('vacations.index') }}" class="btn btn-secondary">Back to list</a>
            <a href="{{ route('vacations.edit', $vacation->id) }}" class="btn btn-primary">Edit Vacation</a>
        </div>
    </div>
</div>

</body>
</html>
