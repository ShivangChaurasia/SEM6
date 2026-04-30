<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h1>Upload Image</h1>

    <form method="POST" action="{{ url('upload') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="image">Choose an image file</label>
            <input type="file" name="image" id="image" accept="image/*" required>
        </div>

        <div>
            <button type="submit">Upload</button>
        </div>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('filename'))
        <p>Uploaded file: {{ session('filename') }}</p>
    @endif

    @if ($errors->any())
        <div>
            <strong>Upload failed:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>



