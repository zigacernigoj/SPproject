<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gib za vse</title>

    <!-- Latest compiled and minified CSS -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />--}}

    <link rel="stylesheet" href="/css/all.css">
    {{--<link rel="stylesheet" href="/css/my.css">--}}
    {{--v hrefu tole ne dela {{ elixir('css/all.css') }} ker nekje v configu ni prave poti
     ... da localhost/build ... poskusi /laravel/public/css/all.css--}}

</head>
<body>

@if($currentUser != null && ($currentUser->isAManager() || $currentUser->isAnAdmin()))
    @include('navbars.mainNav')
@elseif($currentUser != null)
    @include('navbars.userMenu')
@else
    @include('navbars.guestMenu')
@endif

<div class="container">
    @include('flash::message')
    @yield('content')
</div>


{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
<!-- Latest compiled and minified JavaScript -->
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>--}}
<script src="/js/all.js"></script>


<script>
    // $('div.alert').not('.alert-important').delay(3000).slideUp(300);

    // za overlay -> modals
    $('#flash-overlay-modal').modal();
</script>

@yield('footer')
<div class="footer1">© GIBZAVSE VSE PRAVICE PRIDRŽANE</div>

</body>
</html>