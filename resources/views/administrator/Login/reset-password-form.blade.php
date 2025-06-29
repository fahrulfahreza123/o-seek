<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
</head>

<body>
    <h2>Reset Your Password</h2>

    <form action="/api/reset-password" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ session('email') }}">

        <label for="password">New Password:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm New Password:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Reset Password</button>
    </form>
</body>

</html>