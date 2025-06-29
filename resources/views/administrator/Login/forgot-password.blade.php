<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
</head>

<body>
    <h1>Lupa Password</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('forgot-password.handle') }}" method="POST">
        @csrf
        <label for="name">Masukkan name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Reset Password</button>
    </form>
</body>

</html>
