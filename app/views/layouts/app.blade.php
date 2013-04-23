<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flock
        {{-- Check to see if the title has been set --}}
        @if (isset($title))
        · {{ $title }}
        @endif

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="/assets/application.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>
@include('layouts._navigation-sidebar')
@include('layouts._navigation-app')
<div class="container">
    <div class="row">
        @include($_sidebarLeft)

        @yield('content')

        @include('layouts._sidebar-right')
    </div>
        @include('layouts._footer')
    </div>
</div>
</body>
</html>
