<!DOCTYPE html >
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta content='width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=10">
		<link rel="shortcut icon" href="favicon.ico">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body >
        {!! Theme::partial('header') !!}

        <div class="container full-container">
            {!! Theme::content() !!}
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>