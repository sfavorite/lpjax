<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'DBF' --}}
        @yield('title','Pjax Demo')
    </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JQuery & JQueryUI library -->
    <script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

    <script src="js/jquery.pjax.js" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Get Bootstrap files from CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
    <script>

    $(document).ready(function() {


        $(document).pjax('a[data-pjax]');
        //$('#testing').pjax('.js-pjax')

        $('#picture').pjax('a', '#picture')
        $('#number').pjax('a', '#number')



        if ($.support.pjax) {

            $.pjax.defaults.timeout = 1000; // time in milliseconds
        }

        $(document).on('pjax:start', function() { NProgress.start(); });
        $(document).on('pjax:end',   function() { NProgress.done();  });

        $('ul.nav > li').click(function(e) {
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
        });


    });
    </script>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>


        <div id='testing'>
            <!-- This will be where our content is pulled in on a per page basis -->
            {{-- Main page content will be yielded here --}}
            @yield('content')

            {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
            @yield('body')
        </div>


</body>


</html>
