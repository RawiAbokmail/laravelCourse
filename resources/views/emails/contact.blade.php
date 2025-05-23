<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }
    .email-container {
        background: #fff;
        max-width: 600px;
        margin: 40px auto;
        padding: 32px 24px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    }
    h1 {
        color: #2c3e50;
        font-size: 24px;
        margin-bottom: 16px;
    }
    p {
        color: #444;
        font-size: 16px;
        margin: 8px 0;
    }
    br {
        line-height: 2;
    }
</style>
<div class="email-container">
    <h1>Welcome Dear Admin</h1>
    <p>There is a new message with the following information</p>
    <br>
    <p>name : {{ $data['name'] }}</p>
    <p>email : {{ $data['email'] }}</p>
    <p>phone : {{ $data['phone'] }}</p>
    <p>message : {{ $data['message'] }}</p>
    <br>
    <p>Best Regards</p>

</body>
</html>
