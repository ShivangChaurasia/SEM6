<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    @if (!$student)
        <p>Student with ID {{ $id }} was not found.</p>
    @else
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $student['user']['name'] }}</td>
            </tr>
            <tr>
                <td>Course</td>
                <td>{{ $student['user']['course'] }}</td>
            </tr>
            <tr>
                <td>City</td>
                <td>{{ $student['user']['city'] }}</td>
            </tr>
        </table>
    @endif
</body>
</html>
