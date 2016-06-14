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


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .number {
                font-size: 40px;
            }

            .visual_preview_standard {
                overflow: hidden;
                text-align: center
            }

            .padding-bottom-10 {
                padding-bottom: 10px
            }

            .row [class*="col-"]{
                margin-bottom: -99999px;
                padding-bottom: 99999px;
            }

            .row{
                overflow: hidden;
            }



        </style>

        <script src="js/jquery.pjax.js"></script>
    </head>
    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 visual_preview_standard padding-bottom-10" style='background-color:yellow;' id='top'>
                    <div class="row">
                        DKY
                        <!-- <div class="title" contenteditable='true'>DKY -->
                    </div>
                </div>

                <div class="col-md-6 visual_preview_standard padding-bottom-10" style='background-color:pink;' id='top'>
                    <div class="row">
                        <div class="title" contenteditable='true'>Wiki
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 visual_preview_standard padding-bottom-10" style='background-color:indianred;' id='top'>
                    <div class="row">
                        <div class="title" contenteditable='true'>Picture
                    </div>
                </div>

                <div class="col-md-6 visual_preview_standard padding-bottom-10" style='background-color:green;' id='top'>
                    <div class="content">
                        <div class="title" contenteditable='true'>Random #
                        </div>
                        <div class='container number' id='number'>
                            <a href='/'>New</a>
                            <br>{{rand()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
        //$(document).pjax('a', 'body');

        $('#main').pjax('a', '#number');
        $.pjax.defaults.timeout = 1000; // time in milliseconds
        </script>

    </body>
</html>
