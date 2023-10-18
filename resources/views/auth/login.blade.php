<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/uniform/css/uniform.default.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/css/components.min.css" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="{{ asset('assets') }}/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<body class="login">
<div class="container">
        <div class="row justify-content-center" style="margin-top:10%">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- User Login Form Fields -->
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- y -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('assets') }}/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets') }}/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets') }}/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets') }}/global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/pages/scripts/login.min.js" type="text/javascript"></script>
</body>
</html>

