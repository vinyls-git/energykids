<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <meta property="og:title" content="Energy Kids Academy" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.opendesignschool.net/" />
    <meta property="og:image" content="img/logo.png" />
    <meta property="og:description" content="Bienvenue chez Energy Kids Academy." />
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--Reset Meyer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <!--Style-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <!--fontAwesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Energy Kids Academy</title>
</head>
<body>

    <!--HEADER-->

    <header role="banner">
        @include('partials/_header')
    </header>

    <!--MAIN-->

    <main role="main">
        <aside id="sidebar">
            @include('partials/_sidebar')
        </aside>
        <div id="content">
            @yield('content')
        </div>    
    </main>

    <!--FOOTER-->

    <footer role="contentinfo">
        @include('partials/_footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ URL::asset('js/custom.js') }} "></script>
</body>