<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="shortcut icon" href="./public/images/fav.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lato:wght@400;700&family=Oswald:wght@500;700&family=Russo+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset(mix('css/tailwind.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/main.css')) }}">
</head>

<body>

    @include('layouts.sections.header')





    @yield('content')








    @include('layouts.sections.footer')

    <script src="https://kit.fontawesome.com/c6ba8f258a.js" crossorigin="anonymous"></script>

    <script src="{{ asset(mix('js/main.js')) }}"></script>
</body>

</html>
