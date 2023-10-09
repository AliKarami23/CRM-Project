<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Card</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 20px;
    }
    .card {
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }
    .card h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }
    .card p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }
</style>
<body>
<div class="card">
    <h2>Welcome to Our CRM</h2>
    <p>
        Dear {{$FullName}}, welcome to our platform. We're glad to have you on board.
        your PhoneNumber is {{$PhoneNumber}} and your email is {{$Email}}
    </p>
</div>
</body>
</html>
