<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Leave Request</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6">

    <h2>New Leave Request</h2>

    <p>
        <strong>Employee:</strong> {{ $leave->employee->name }} <br>
        <strong>Email:</strong> {{ $leave->employee->email }}
    </p>

    <p>
        <strong>Leave Type:</strong> {{ $leave->leave_type }} <br>
        <strong>From:</strong> {{ $leave->start_date }} <br>
        <strong>To:</strong> {{ $leave->end_date }}
    </p>

    @if($leave->reason)
        <p>
            <strong>Reason:</strong><br>
            {{ $leave->reason }}
        </p>
    @endif

    <p>
        Status: <strong>{{ ucfirst($leave->status) }}</strong>
    </p>

    <p>
        — {{ config('app.name') }}
    </p>

</body>
</html>
