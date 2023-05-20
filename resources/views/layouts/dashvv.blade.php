<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{!! csrf_token() !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>

    <title>Flop Res | {{ $title }}</title>
          @vite('resources/css/app.css')
</head>
<body class="bg-violet-200 w-full pt-5">
    <h1 class="text-center font-bold text-4xl text-orange-400 mb-3">API sample endpoints sample Documentation</h1>
    <div class='w-full flex flex-col justify-around'>
        <div class="bg-slate-800 w-11/12 self-center flex flex-col content-center rounded-lg p-4 m-8">
            <section class='w-full'>
                <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="text-yellow-50">Method</td>
                        <th class="text-yellow-50">Endpoint (click to copy)</td>
                        <th class="text-yellow-50">Action</td>
                        <th class="text-yellow-50">Response Sample</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">POST</span></td>
                        <td><span class='cursor-grab rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50 endPoint'>https://scheidj.wd49p.com/api/new-city</span></td>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">Add New Record</span></td>
                        <td>
                            <pre>
                                <code id="putsamP" class='bg-blue-200 text-xs'></code>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">POST</span></td>
                        <td><span class='cursor-grab rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50 endPoint'>https://scheidj.wd49p.com/api/manipulate-city</span></td>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">Update Record</span></td>
                        <td>
                            <pre>
                                <code id="upsamP" class='bg-blue-200 text-xs'></code>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">GET</span></td>
                        <td><span class='cursor-grab rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50 endPoint'>https://scheidj.wd49p.com/api/show-city/{UID}</span></td>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">Show Individual Record</span></td>
                        <td>
                            <pre>
                                <code id="IshowsamP" class='bg-blue-200 text-xs'></code>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">GET</span></td>
                        <td><span class='cursor-grab rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50 endPoint'>https://scheidj.wd49p.com/api/show-city/</span></td>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">Show All Record</span></td>
                        <td>
                            <pre>
                                <code id="showsamP" class='bg-blue-200 text-xs'></code>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">GET</span></td>
                        <td><span class='cursor-grab rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50 endPoint'>https://scheidj.wd49p.com/api/destroy-city/{UID}</span></td>
                        <td><span class="rounded-md bg-slate-400 p-2 bg-opacity-25 text-yellow-50">Destroy Record</span></td>
                        <td>
                            <pre>
                                <code id="delsamP" class='bg-blue-200 text-xs'></code>
                            </pre>
                        </td>
                    </tr>
                </tbody>
                </table>
            </section>
            <div class="w-full mt-8">
                <h3 class="cursor-help p-2 bg-slate-400 bg-opacity-25 rounded-md w-full text-center text-yellow-50">Keys</h3>
                <div class="flex justify-evenly mt-4">
                    <span class="endPoint cursor-help p-2 bg-slate-400 bg-opacity-25 rounded-md text-yellow-50">Uniqueid</span>
                    <span class="endPoint cursor-help p-2 bg-slate-400 bg-opacity-25 rounded-md text-yellow-50">CityName</span>
                    <span class="endPoint cursor-help p-2 bg-slate-400 bg-opacity-25 rounded-md text-yellow-50">CityMayor</span>
                    <span class="endPoint cursor-help p-2 bg-slate-400 bg-opacity-25 rounded-md text-yellow-50">CityPostalCode</span>
                </div>
            </div>
        </div>
        <div id='dataField' class="bg-amber-200 text-center text">

        </div>
    </div>
</body>
</html>
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/doc.js') }}"></script>