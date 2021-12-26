<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('/asset/signup/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ URL::asset('/asset/signup/images/form-img.jpg')}}" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>CSP are waiting for <b>You !</b></p>
                    </div>
                </div>
                <div class="signup-form">
                    <form action="signupUser" method="Post" class="register-form" id="register-form" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">User Id</label>
                                    <input type="text" name="userid" id="userid" required/>

                                    @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Full name</label>
                                    <input type="text" name="name" id="name" required />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" required/>
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Password</label>
                                    <input type="password" name="password" id="password" required/>
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" >Phone number</label>
                                    <input type="text" name="phone" id="phone" required />
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Select Package</label>
                                        <a href="#" class="form-link">Default 1000 BDT</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">1000 BDT</option>
                                            <option value="Kosher">1000 BDT</option>
                                            <option value="Asian Vegetarian">1000 BDT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>
                                        
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="cash" value= "male" checked >
                                            <label for="cash">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="cheque" value= "female">
                                            <label for="cheque">Female</label>
                                            <span class="check"></span>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="form-input">
                                
                                    <label for="chequeno">Select your photo</label>
                                    <input type="file" name="image" id="image" required />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Referral ID</label>
                                    <input type="text" name="referral" id="referral" required/>
                                    @if(session()->has('wrong'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('wrong') }}
                                    </div>
                                    @endif
                                </div>
                               
                                <div class="form-input">
                                    <label for="company" >Country</label>
                                    <input type="text" name="company" id="company" placeholder="Bangladesh" disabled/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ URL::asset('/asset/signup/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{ URL::asset('/asset/signup/js/main.js')}}"></script>
</body>
</html> 