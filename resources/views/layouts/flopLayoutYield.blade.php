<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flop Res</title>
          @vite('resources/css/app.css')
    </head>
    <body class="bg-violet-700">
        <h1 class="text-center font-bold text-4xl text-indigo-700">Be with us</h1>
        <div class='w-full bg-violet-300'>
            @yield('content')
            <!-- @yield('insides') -->
        </div>
    
</body>
</html>