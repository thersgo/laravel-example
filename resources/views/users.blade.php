<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <h1 style="text-align: center;">
        Users
    </h1>
    <ul>
        @foreach ($users as $user)
            <li style="line-height: 1.4">
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</body>

</html>