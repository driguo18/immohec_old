
    <!DOCTYPE html>
    <!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
    <!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Login - {{ config('app.name') }}</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets/backend/img/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon57.png') }}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon72.png') }}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon76.png') }}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon114.png') }}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon120.png') }}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon144.png') }}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon152.png') }}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{ asset('assets/backend/img/icon180.png') }}" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/plugins.css') }}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/main.css') }}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/themes.css') }}">
        <!-- END Stylesheets -->
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/toastr.min.css') }}">
        <!-- End Toastr  -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{ asset('assets/backend/js/vendor/modernizr-3.3.1.min.js') }}"></script>
    </head>
    <body>
    <!-- Login Container -->
    <div id="login-container">
        <!-- Login Header -->
        <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
            <i class="fa fa-home"></i> <strong>Connexion - {{ config('app.name') }}</strong>
        </h1>
        <!-- END Login Header -->

        <!-- Login Block -->
        <div class="block animation-fadeInQuickInv">
            <!-- Login Title -->
            <div class="block-title">
               <!-- <div class="block-options pull-right">
                    <a href="page_ready_reminder.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Forgot your password?"><i class="fa fa-exclamation-circle"></i></a>
                    <a href="page_ready_register.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Create new account"><i class="fa fa-plus"></i></a>
                </div> -->
                <h2>Connectez-vous</h2>
            </div>
            <!-- END Login Title -->

            <!-- Login Form -->
            <form id="form-login" action="{{ route('login') }}" method="post" class="form-horizontal">@csrf
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-xs-8">
                        <label class="csscheckbox csscheckbox-primary">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <span></span>
                        </label>
                        Se souvenir de moi
                    </div>
                    <div class="col-xs-4 text-right">
                        <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Connexion</button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Login Block -->

        <!-- Footer -->
        <footer class="text-muted text-center animation-pullUp">
            <small><span>2019</span> &copy; <strong>ImmoHEC - Par Rodrigue Wognin</strong></small>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Login Container -->

    <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
    <script src="{{ asset('assets/backend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('assets/backend/js/pages/readyLogin.js') }}"></script>
    <script>$(function(){ ReadyLogin.init(); });</script>

    {!! Toastr::message() !!}
    </body>
    </html>
