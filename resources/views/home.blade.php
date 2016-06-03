<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Ziga C">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Gib za vse</title>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" ></script>--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"--}}
          {{--integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}

    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"--}}
            {{--integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}

    {{--<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>--}}

    {{--<link rel="stylesheet" type="text/css" href="/css/all.css">--}}
    <link rel="stylesheet" type="text/css" href="/css/home/all.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container-fluid">

    <div id="circle-container">
    </div>

    <div class="rightmenu">

        <div class="row right">
            <div id="novice" class="rightbar">
                <div class="rightinner">
                    <a id="showNews">
                        Novice
                    </a>
                </div>

            </div>
        </div>

        <div class="row right">
            <div class="rightbar">
                <div class="rightinner">
                    <a href="">
                        forum
                    </a>
                </div>

            </div>
        </div>

        <div class="row right">
            <div class="rightbar">
                <div class="rightinner">
                    <a href="">
                        tel/mail
                    </a>
                </div>

            </div>
        </div>

        <div class="row right">
            <div class="rightbar">
                <div class="rightinner">
                    <a href="">
                        FB
                    </a>
                </div>

            </div>
        </div>

        {{--<div class="row right">--}}
            {{--<div class="rightbar">--}}
                {{--<div class="rightinner">--}}
                    {{--@if($currentUser != null)--}}
                        {{--@if($currentUser->isAManager() || $currentUser->isAnAdmin())--}}
                            {{--{!! link_to_action('UserController@index', $currentUser->username) !!}--}}
                        {{--@else--}}
                            {{--{!! link_to_action('UserController@show', $currentUser->username, [$currentUser->id]) !!}--}}
                        {{--@endif--}}
                        {{--<br/>--}}
                        {{--<a href="{{ action('Auth\AuthController@getLogout') }}">Odjava</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ action('Auth\AuthController@getLogin') }}">Prijava</a>--}}
                    {{--@endif--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    </div>


    <div id="circle-back1" class="cc1 rounded">
    </div>

    <div id="circle-content1" class="cc1 rounded">
    </div>

    <div id="circle-back3" class="cc3 rounded">
    </div>

    <div id="circle-content3" class="cc3 rounded">
    </div>

    <div id="circle-back2" class="cc2 circled">
    </div>

    <div id="circle-content2" class="cc2 circled">
    </div>


    <div class="footer" id="footer">© GibZaVse vse pravice pridržane</div>

    {{--<script src="/js/home/home.js"></script>--}}
    <script src="/js/home/all.js"></script>

</div>

</body>
</html>
