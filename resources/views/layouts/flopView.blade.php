<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{!! csrf_token() !!}">

    <title>Flop Res | {{ $title }}</title>
          @vite('resources/css/app.css')
</head>
<body class="bg-violet-200 w-full pt-5">
    <h1 class="text-center font-bold text-4xl text-orange-400">MM City</h1>
    <div class='w-full bg-violet-300 flex flex-col justify-around'>
        <div class="bg-red-800 w-7/12 self-center flex flex-col content-center rounded-lg p-4">
            <div class="mb-6">
            <input type="text" id="cUID" maxlength="20" style="display: none;" class="mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
            <input type="text" id="cName" maxlength="20" placeholder="Name of the City" class="mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
            <input type="text" id="cMayor" maxlength="40" placeholder="Mayor of the City" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
            <input type="number" id="cPCode" min='1000' max='9999' maxlength="4" placeholder="Postal Code of the City" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button id='addcDetail' class="mb-8 bg-amber-400 text-sm rounded-lg theButton">Add Data</button>
        </div>
        <div id='dataField' class="bg-amber-200 text-center text">

        </div>
    </div>
</body>
</html>
<!-- @vite('resources/js/jquery-3.6.4.min.js') -->
<!-- @vite('resources/js/app.js') -->
<!-- <script src="{{asset('js/jquery-3.6.4.min.js')}}"></script> -->
<!-- <script src="{{asset('js/app.js')}}"></script> -->
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>