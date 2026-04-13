<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    <h2>Gender</h2>
    <p>{{ $gender }}</p>
</body>
</html>
