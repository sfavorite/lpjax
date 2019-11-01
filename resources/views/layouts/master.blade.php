<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'DBF' --}}
        @yield('title','Pjax Demo')
    </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JQuery library -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- pjax plugin -->
    <script src="{{asset('js/jquery.pjax.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    <!-- Get Bootstrap files from CDN -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/nprogress.js') }}"></script>
    <link rel='stylesheet' href='css/nprogress.css'/>


    <style>
        html, body {
            height: 100%;
            width: 100%;
            margin: 0px;
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
            font-weight: bold;
            font-size: 3em;
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
            // Don't scroll when a pjax request is made
            $.pjax.defaults.scrollTo = false;
            $.pjax.defaults.timeout = 1000; // time in milliseconds
        }

        // Give a visual feedback
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
