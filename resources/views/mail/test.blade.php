<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Mailer</title>
</head>
<body>
    <h1>{{ $mailData['title']}}</h1>
    <p>Order No.: {{ $mailData['order_no']}}</p>
    <p>User: {{ $mailData['user']}}</p>
</body>
</html>