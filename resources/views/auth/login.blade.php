
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Lumbini Medical College And Teaching Hospital</title>

  <!-- Bootstrap CSS -->
  <link href="{{URL::to('/')}}/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{URL::to('/')}}/backend/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{URL::to('/')}}/backend/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{URL::to('/')}}/backend/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{URL::to('/')}}/backend/css/style.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/backend/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="login-wrap col-lg-6">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <span class="input-group-addon">Email</span>
            <input id="email" type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-group">
            
          <span class="input-group-addon">Password</span>
          <input id="password" type="password" class="form-control" placeholder="password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="{{ url::to('/') }}/password/reset"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block"><a href="{{url::to('/')}}/register">Signup</a></button>
      </div>
      <div class="col-lg-3"></div>
      </div>
    </form>
    <div class="text-center">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="">Lumbini Medical College And Teaching Hospital</a>
        </div>
    </div>
  </div>


</body>

</html>

