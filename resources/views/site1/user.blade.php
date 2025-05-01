<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
    span {
        color: red;
        font-size: 30px;
        font-weight: bold;
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Welcome <span>{{ $name }}</span> , age <span>
            {{ $age }}
        </span>
    </h1>
    <p>Users Count <?= $users_count ?></p>
</body>

</html>
