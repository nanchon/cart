<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Styles -->
  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
      background-image: url(https://cdn-images-1.medium.com/max/2000/1*MNk9YXGMsUyyxYlyZf73lw.jpeg);
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a>
    </div>
    @endif

    <div class="content">
      <div class="jumbotron" style="background: none;color:#fff;">
        <h1 style="font-weight: 100;">list sample</h1>
      </div>
      <div class="jumbotron" style="text-align: left;padding-left: 130px;background: rgba(0,0,0,.175);color:#fff;">
        <div class="h3">
          <div class="">
            <div class="checkbox">
              <label style="font-weight: 100;">
                <input type="checkbox" id="" checked="checked">
                Relation
              </label>
            </div>
          </div>
          <div class="">
            <div class="checkbox">
              <label style="font-weight: 100;">
                <input type="checkbox" id="" checked="checked">
                pager
              </label>
            </div>
          </div>
          <div class="">
            <div class="checkbox">
              <label style="font-weight: 100;">
                <input type="checkbox" id="">
                sort
              </label>
            </div>
          </div>
          <div class="">
            <div class="checkbox">
              <label style="font-weight: 100;">
                <input type="checkbox" id="">
                search
              </label>
            </div>
          </div>
          <div class="">
            <div class="checkbox">
              <label style="font-weight: 100;">
                <input type="checkbox" id="">
                flash message
              </label>
            </div>
          </div>
        </div>
      </div>
      <p><a class="btn btn-primary btn-lg" href="talent" role="button">　sample　</a></p>
      <div class="links">
        <a href="https://medium.com/nanchoso-weblog">nanchoso@Midium</a>
        <a href="https://github.com/nanchon/cart">nanchon@GitHub</a>
      </div>
    </div>
  </div>
</body>
</html>
