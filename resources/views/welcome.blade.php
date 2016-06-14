<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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

        <script src="js/jquery.pjax.js"></script>

    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class='navbar-brand' href='http://www.scotfavorite.com' target='_blank'>Favorite Consulting</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Guest</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>

        <div class="wide">
            <div class="col-xs-5 line"><hr></div>
            <div class="col-xs-2 logo">Non-Pjax</div>
            <div class="col-xs-5 line"><hr></div>
        </div>


        <div class="container">
            <div class="text-center my">
                <h1>PJAX Content</h1>
            </div>
        </div>


        <div class="container-fluid" style="height:100%" id='content'>

            <div class='row pjax-text'>

                <div class="col-md-6">
                    <div>Picture</div>
                    <div class="my" data-pjax='#content' id='picture'>
                        <a href='/'>Link A</a>
                        <br>
                            <img src='img/{{ $picture }}' alt='random picture' height=200, width=200>
                    </div>
                </div>

                <div class="col-md-6 pjax-text">
                    <div class="title">Random #</div>
                    <div id='number'>
                        <a href='/' data-pjax='#content'>Link B</a>
                        <br>{{rand()}}
                    </div>
                </div>

            </div>

        </div>


        <script>

        $(document).ready(function() {
            //$(document).pjax('a', 'body');

            //$(document).pjax('a', '#number');
            $(document).pjax('a', '#content');
            //$('a[data-pjax]').pjax();
            if ($.support.pjax) {
                $.pjax.defaults.timeout = 1000; // time in milliseconds
            }

            $(document).on('pjax:start', function() { NProgress.start(); });
            $(document).on('pjax:end',   function() { NProgress.done();  });


        });
        </script>

    </body>
</html>
