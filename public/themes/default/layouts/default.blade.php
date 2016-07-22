<!DOCTYPE html >
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge, Chrome=1">
		<meta http-equiv="X-UA-Compatible" content="IE=7" />
        <meta content='width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<link rel="shortcut icon" href="favicon.ico">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
	    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
         <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
		 <script src="/themes/default/assets/js/jquery-1.8.3.min.js"></script>
        <![endif]-->
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
		<!-- miwo-life.com Baidu tongji analytics -->
		<script type="text/javascript">
         var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
         document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F330479a25665815cccd69c3668994e47' type='text/javascript'%3E%3C/script%3E"));
        </script>
    </head>
    <body class="gt">
        {!! Theme::partial('header') !!}

        <div class="container full-container">
            {!! Theme::content() !!}
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>