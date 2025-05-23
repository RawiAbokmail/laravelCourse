<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .email-content {
        background: #fff;
        max-width: 600px;
        margin: 40px auto;
        padding: 32px 24px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        border: 1px solid #e3e3e3;
    }
    h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 24px;
    }
    p {
        color: #444;
        font-size: 16px;
        margin: 8px 0;
    }
    strong {
        color: #222;
    }
</style>
</head>
<body>

    <div class="email-content">
        <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
    </div>

</body>
</html>
