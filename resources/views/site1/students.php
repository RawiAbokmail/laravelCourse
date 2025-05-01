<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Site1</title>
</head>

<body>
    <h1>Students of <?php echo $teacher ?></h1>
    <?php if(count($students) > 0): ?>
    <ul>
        <!-- @foreach ($students as $student)
        <li>{{ $student }}</li>
        @endforeach -->
        <?php foreach($students as $std): ?>
        <li><?= $std ?></li>
        <?php endforeach ?>
    </ul>
    <?php else: ?>
    <p>you dont have any students</p>
    <?php endif ?>

    <a href="{{ route('site1.index') }}">Home</a>
    <a href="{{ route('site1.about') }}">About</a>
    <a href="{{ route('site1.contact') }}">Contact</a>
</body>

</html>
