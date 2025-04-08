<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our App</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="{{ $logo }}" alt="PB Logo" width="100">
</div>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>Thank you for registering with us.</p>
    <p>Click the link below to verify your email:</p>
    <a href="{{ $verificationUrl }}">Verify Email</a>
</body>
</html>
