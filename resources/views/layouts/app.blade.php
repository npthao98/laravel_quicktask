<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Quickstart - Basic</title>
    <link href="{{ asset('bower_components/font-awesome/css/all.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('bower_components/font-lato/font_lato.css') }}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">
                {{ trans('tasks.app.title') }}
            </a>
        </div>
        <div class="navbar-header language">
            <a class="navbar-brand" href="{{ route('user.change-language', ['en']) }}">{{ trans('tasks.english') }}</a>
            <a class="navbar-brand" href="{{ route('user.change-language', ['vi']) }}">{{ trans('tasks.vietnam') }}</a>
        </div>
    </div>
</nav>
@yield('content')
<script src="{{ asset('bower_components/js/jquery.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
