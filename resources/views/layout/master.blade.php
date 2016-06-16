<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'DBF' --}}
        @yield('title','Pjax Demo')
    </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Get Bootstrap files from CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src='js/nprogress.js'></script>
    <link rel='stylesheet' href='css/nprogress.css'/>


    <style>
        html, body {
            height: 100%;
            width: 100%;
            margin: 0px;
        }

        body {
            padding-top: 50px;
        }

        body {
        /*    margin: 0;
            padding-top: 50px;
            display: table; */
        }

        .number {
            font-size: 30px;
            color: rgb(255, 255, 255);
            text-align: center;
            display: inline-block;
        }


        .wide {
            width: 100%;
            height: 315px;
            /*height: calc(100% - 1px);*/

            background-image: url('https://unsplash.it/1905/315?random&element=DIV');
            background-size: cover;
        }

        .wide img {
            width: 100%;
            height: 315px;
        }

        .logo {
            color: #fff;
            font-weight: 800;
            font-size: 14pt;
            padding: 25px;
            text-align: center;
        }

        .line {
            padding-top: 20px;
            white-space: no-wrap;
            overflow: hidden;
            text-align: center;
        }

        .my {
            font-family: 'Lato';
        }

        .my img {
            display: block;
            margin: 0 auto;
            vertical-align: middle;
            left: 50%;
        }

        .pjax-text {
            text-align: center;
            font-weight: 100;
            font-size: 96px;
            font-family: 'Lato';

        }

    </style>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>


        <!-- This will be where our content is pulled in on a per page basis -->
            <div class="container">
            {{-- Main page content will be yielded here --}}

            @yield('content')
            </div>



    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>


</html>
