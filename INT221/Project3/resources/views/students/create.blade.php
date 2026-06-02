<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8fafc; padding: 24px; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(99, 102, 241, 0.08); }
        .field { margin-bottom: 16px; }
        label { display: block; font-weight: 600; margin-bottom: 6px; }
        input, select { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 8px; }
        button { background: #4f46e5; color: #fff; border: none; padding: 12px 18px; border-radius: 8px; cursor: pointer; }
        .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 16px; }
        .alert-success { background: #ecfdf5; color: #166534; }
        .alert-error { background: #fef2f2; color: #991b1b; }
        .errors li { margin-bottom: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Student</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <strong>There were some problems with your input:</strong>
                <ul class="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/students') }}">
            @csrf

            <div class="field">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required>
            </div>

            <div class="field">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}">
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="field">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}">
            </div>

            <div class="field">
                <label for="date_of_birth">Date of Birth</label>
                <input id="date_of_birth" name="date_of_birth" type="date" value="{{ old('date_of_birth') }}">
            </div>

            <div class="field">
                <label for="course">Course</label>
                <input id="course" name="course" type="text" value="{{ old('course') }}">
            </div>

            <button type="submit">Save Student</button>
        </form>
    </div>
</body>
</html>
