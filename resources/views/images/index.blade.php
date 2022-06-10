<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>File Uploads</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
      <div class="max-w-lg mx-auto mt-24">
        <h1 class="font-bold text-center text-4xl">
          File Uploading Comparisons
        </h1>



        <h2>
          FilePond
        </h2>

        <div id="app"></div>







      </div>
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
