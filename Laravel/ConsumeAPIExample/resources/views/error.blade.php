<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="conatiner-fluid">
        <h1 class="bg-danger text-white p-4 text-center">
            {{ $errormessage }}
        </h1>
    </div>
</body>
</html>