<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('/asset/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('/asset/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/login/css/style.css')}}">

    <title>Login- User</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('asset/login/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>CSPEarth</strong></h3>
              
              </div>
              <form action="loginUser" method="get">
                <div class="form-group first">
                  <label for="username">User Id</label>
                  <input type="text" class="form-control" placeholder="Enter Your Userid" name="username" id="username" required>
                  @if(session()->has('wrong'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('wrong') }}
                                    </div>
                                    @endif
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password" required>
                  @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                    </div>
                                    @endif
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="userSignUp" class="forgot-pass">Create new account</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{ URL::asset('/asset/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/login/js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/login/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/login/js/main.js')}}"></script>
  </body>
</html>