<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>@yield('title')</title>
    {{-- <style>
        body{
            font-family: sans-serif;
        }
        table{
            width: 100%;
        }
        table, th, td{

            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
        caption{
            font-size: 2em;
            font-weight: bold;
            caption-side: top;
            text-align: center;
        }
        tr:nth-child(2n){
            background: #b6b5b5;
        }
        
    </style> --}}
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>
</html>