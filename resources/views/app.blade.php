<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Membership Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="{{ asset('js/mms.js') }}"></script>
    <script src="/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
        #body-content { padding-top: 40px;}
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="brand"><img style src="/images/logo.png" />blu Cat MMS</a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href="/auth/logout">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">

    @yield('content')

            </div>
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>blu Cat Membership Management System</p>
                <div class="disclaimer">
                    <p>Copyright © InfinitePoints Philippines Inc. 2016-2017</p>
                </div>
            </div>
        </footer>

    </body>
</html>