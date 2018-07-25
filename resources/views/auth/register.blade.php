


<style>
    
    



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}

@font-face {
  font-family: Montserrat-Bold;
  src: url('../fonts/montserrat/Montserrat-Bold.ttf'); 
}


/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
  
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #333333;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ utility ]*/

/*==================================================================
[ Text ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  line-height: 1.4;
  color: #999999;
}

.txt2 {
  font-family: Poppins-Regular;
  font-size: 13px;
  line-height: 1.4;
  color: #00ad5f;
}

.txt3 {
  font-family: Poppins-Regular;
  font-size: 15px;
  line-height: 1.4;
  color: #00ad5f;
  text-transform: uppercase;
}

/*==================================================================
[ Size ]*/
.size1 {
  width: 355px;
  max-width: 100%;
}

.size2 {
  width: calc(100% - 43px);
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-image: url('images/alcohol.jpg');
  background-size:cover;
  opacity:0.8;
  padding-top:200px;
}


.wrap-login100 {
  width: 1170px;
  background: #fff;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  flex-direction: row-reverse;

}

/*==================================================================
[ login more ]*/
.login100-more {
  width: 50%;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 1;
}

.login100-more::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.3);
}



/*==================================================================
[ Form ]*/




.login100-form {
  width: 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  padding: 500px 130px 80px 130px;
}

.login100-form-title {
  font-family: Poppins-Regular;
  font-size: 20px;
  color: #555555;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;

  width: 100%;
  display: block;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border: 1px solid #e6e6e6;
}

.rs1-wrap-input100,
.rs2-wrap-input100 {
  width: 50%;
}

.rs2-wrap-input100 {
  border-left: none;
}


.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Poppins-Regular;
  font-size: 18px;
  color: #666666;
  line-height: 1.2;
  padding: 0 25px;
}

input.input100 {
  height: 55px;
}

/*---------------------------------------------*/

.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #00ad5f;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}

.input100:focus + .focus-input100 {
  visibility: visible;
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  border-radius: 3px;
  background: #191970;

  font-family: Montserrat-Bold;
  font-size: 12px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background: #ffe4e1;
}




#ahonoka{
  padding-top:50px;
  padding-bottom:50px;
  margin-left:400px;
  margin-right:400px;
  background:#000;
  background-color:rgba(0,0,0,0.7);

  
}

#ally{
  color: #fff;
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 992px) {
  .login100-form {
    width: 60%;
    padding-left: 30px;
    padding-right: 30px;
  }

  .login100-more {
    width: 40%;
  }
}

@media (max-width: 768px) {
  .login100-form {
    width: 100%;
  }

  .login100-more {
    width: 100%;
  }
}

@media (max-width: 576px) {
  .login100-form {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 150px;
  }

  .rs1-wrap-input100,
  .rs2-wrap-input100 {
    width: 100%;
  }

  .rs2-wrap-input100 {
    border-left: 1px solid #e6e6e6;
  }
}

@media screen and ( max-width:479px )
{
	
#ahonoka{
   width:100%;
	margin-right:auto;
	margin-left:auto;
	}

}


#pizza{
  color: #fff;
}

/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 12px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 18px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}




</style>





<!DOCTYPE html>


<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter ">
		<div class="container-login100 ">
			<!--<div class="wrap-login100 ">-->
				<form class="login100-form validate-form" id="ahonoka" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
				  {{ csrf_field() }}
					<span class="login100-form-title p-b-34" id="ally">
						Account Register
					</span>
					
				<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type username">
			      
			       <input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
			           @if ($errors->has('name'))
                         <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                         </span>
                       @endif
			
		
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
							<input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" required placeholder="Password">
						@if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
						
						
						
						
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               
			   <span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Register') }}
						</button>
						
						 <a class="nav-link" href="{{ route('login') }}" id="pizza">{{ __('Already have an account?') }}</a>
					</div>
					

					<!--<div class="w-full text-center p-t-27 p-b-239" href="{{ route('password.request') }}">-->
					<!--	<span class="txt1">-->
					<!--		{{ __('Forgot Your Password?') }}-->
					<!--	</span>-->

					<!--	<href="{{ route('password.request') }}" class="txt2">-->
						
					<!--	</a>-->
					<!--</div>-->

					<!--<div class="w-full text-center">-->
					<!--	<a href="#" class="txt3">-->
					<!--		Sign Up-->
					<!--	</a>-->
					<!--</div>-->
				</form>
      <div class="login100-more" style="background:#000;"></div>
				<!--<div class="login100-more" style="background-image: url('images/chizu.jpg');"></div>-->
			<!--</div>-->
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>