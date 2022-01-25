<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>

     @include('components.header')   

     @include('components.jumbo')

    <div id="main">
        @yield('content')  

        <div class="bottone">
            <h5>LOAD MORE</h5>
        </div>
    </div>


    @include('components.footer')

    


</body>
</html>