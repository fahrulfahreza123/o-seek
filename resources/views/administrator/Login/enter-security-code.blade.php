<!DOCTYPE html>
<html>

<head>
    <title>Enter Security Code</title>
</head>

<body>
    <h2>Enter Security Code</h2>

    <form action="/api/verify-security-code" method="POST">
        @csrf
        <label for="verification_code">Verification Code:</label>
        <input type="text" name="verification_code" required>
        <button type="submit">Verify Code</button>
    </form>
</body>

</html>