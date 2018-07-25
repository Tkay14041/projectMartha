<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martha</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                height: 100vh;
                background-color:#333;
                background-image:url("../images/back1.jpg");
                background-size:cover;
                opacity:25;
                color: #333;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                color: #FFF;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }
            
            .link > a {
                color: #FFF;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                margin-top: 50px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }
            
            .link { margin-top:5%;}
            

            .m-b-md {
                margin-bottom: 30px;
            }
            
 
            b {
              position: relative;
              display: inline-block;
              text-decoration: none;
            }
            b::after {
              position: absolute;
              bottom: -4px;
              left: 0;
              content: '';
              width: 100%;
              height: 2px;
              background: white;
              transform: scale(0, 1);
              transform-origin: left top;
              transition: transform .3s;
            }
            b:hover::after {
              transform: scale(1, 1);
            }


            a {
              position: relative;
              display: inline-block;
              text-decoration: none;
            }
            a::after {
              position: absolute;
              bottom: -4px;
              left: 0;
              content: '';
              width: 100%;
              height: 2px;
              background: white;
              transform: scale(0, 1);
              transform-origin: left top;
              transition: transform .3s;
            }
            a:hover::after {
              transform: scale(1, 1);
            }
            
            .Shinsengumi { 
                padding-bottom:0;
                padding-top: 200px;
                z-index: 100;
                color:#FFF;
            }
            
            
            
            
            @media screen and ( max-width:479px ){
                    #marthalogo{

		            width:30%;
		            height:auto;
                	}
	
}

            @media only screen 
                    and (min-device-width : 768px) 
                    and (max-device-width : 1024px) 
            {
            #marthalogo{
	            	width:30%;
	            	height:auto;
	               }
}






            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log In</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="./images/rogo.png" id="marthalogo" class=animatedFadein></img>
                </div>

                <div class="links">
                    <a href="{{ route('login') }}"><b>log In</b></a>
                    <a href="{{ route('register') }}"><b>Register</b></a>
                 
                </div>
                 
                <div class="link">
                    <a href="{{ route('map.get') }}">Get Started</a>
                    
                </div>
                <div class="Shinsengumi">©Shinsengumi</div>
            </div>
        </div>
    </body>
    
</html>
