<!-- <!DOCTYPE html>
<html lang=" str_replace('_', '-', app()->getLocale()) ">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Canary</title>
</head>

<body>
  <div id="app"></div>
  @vite('resources/js/app.js')
</body>

</html> -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

        <title>Canary</title>
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>