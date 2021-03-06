<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GetCandy - Create new password</title>

    <link rel="shortcut icon" type="image/png" href="/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- GetCandy -->
    <link href="{{ url('candy-hub/css/hub.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
    window.Laravel = {
        "csrfToken": "{{ csrf_token() }}"
    };
    </script>
  </head>
  <body>
  <div class="container-fluid" id="app">
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <div class="login-form">
          <img src="{{ url('candy-hub/images/logo/getcandy.png') }}" class="logo" alt="GetCandy">


          @if (session('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
          @endif
          <form method="post" action="{{ route('hub.password.reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
              <label class="sr-only">Email</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email', $email) }}">
              </div>
            </div>
            @if($errors->get('email'))
              <div class="alert alert-danger">
                @foreach($errors->get('email') as $error)
                  {{ $error }}
                @endforeach
              </div>
            @endif
            <div class="form-group">
              <label class="sr-only">Password</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="New Password" name="password">
              </div>
            </div>
            @if($errors->get('password'))
              <div class="alert alert-danger">
                @foreach($errors->get('password') as $error)
                  {{ $error }}
                @endforeach
              </div>
            @endif
            <div class="form-group">
              <label class="sr-only">Password Confirmation</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Update password</button>
              </div>
            </div>
          </form>
          <hr>
          <div class="text-center">
            Know your password? <a href="{{ route('hub.login') }}" title="Go to Login page">Go to Login page</a>
          </div>
        </div>
      </div>
      <div class="login-img"></div>
    </div>
  </div>
    <div class="main-purple-overlay"></div>

    <script src="{{ url('candy-hub/js/app.js') }}"></script>
  </body>
</html>
