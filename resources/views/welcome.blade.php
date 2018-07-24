<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Martha</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/Martha.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jquery.onepage-scroll.js"></script>
    <link href='onepage-scroll.css' rel='stylesheet' type='text/css'>



    
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        .carouselMarthaIndicators {
            background-size:100%;
        }
                
                
        .main {background-color:#000;}
        
        .viewa {
            background: url("./images/img02.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            width: 100%;
            height: 100%;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
                }
                
        .viewb {
            background: url("./images/img03.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            width: 100%;
            height: 100%;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
                }
                
        .viewc {
            background: url("./images/back1.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            width: 100%;
            height: 100%;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
                }
        
        .viewd {
            background: url("./images/back3.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;    
            width: 100%;
            height: 100%;
            -o-background-size: cover;
            background-size: cover;
                }
        
        .viewe {
            background: url("./images/back2.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            width: 100%;
            height: 100%;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
                }
                
                
        .blackeffect{ height:100%;
         width:100%;
         background-size: cover;}
    </style>

</head>

<body>
    <!--Navbar-->
        <nav class="navbar navbar-dark  navbar-expand-sm navbar-right   fixed-top  scrolling-navbar">
            <div id="Martharogomigini">
            <a class="navbar-brand" href="#"><img src="./images/rogo.png" id="navbar-title"></img></a></div>
            <!--<div id='navinside' class="container">-->
            <!--    <a class="navbar-brand" href="#"><img src="./images/rogo.png" id="navbar-title"></img></a>-->
                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
                <!--    <span class="navbar-toggler-icon"></span>-->
                <!--</button>-->
               
            <!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    
            <!--        <ul class="navbar-nav mr-auto">-->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
            <!--            </li>-->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="#">Features</a>-->
            <!--            </li>-->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="#">Pricing</a>-->
            <!--            </li>-->
            <!--        </ul>-->

            <!--    </div>-->

            <!--</div>-->
            
            <div id="loginform">
                    <!--<form class="navbar-form navbar-left form-inline" role="search">-->
                    <!--    <div class="form-group">-->
                    <!--    <input type="text"  placeholder="User Name">-->
                    <!--    </div>-->
                    <!--    <div>　</div>-->
                    <!--    <div class="form-group">-->
                    <!--    <input type="text" placeholder="User Password">-->
                    <!--    </div>-->
                    <!--    <button type="submit" class="btn btn-default btn-sm">Login</button>-->
                    <!--</form>-->
                    {!! Form::open(['route' => 'signup.post']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
        
                        {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
            </div>        
            
        </nav>
    <!--/.Navbar-->
    
    
    
    
    
<div class="main">
      <section class="section page1">    
        <!--/.slider-->
        <div id="carouselMarthaIndicators" class="vh relative carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
            <div id="mainmartha" class="carousel-caption  d-none d-md-block">
            <table><tr><td></td>
                <td id="rogoandtext">
                    <h1><img src="./images/rogo.png" id="Martha" class="animated fadeIn"></h1>
                    <h4 id="mapandmore" class="animated fadeInUp">Map and More...</h4></td>
                <td><img src="./images/longtoumei.png" id="toumei200"></td>
            
                <div class="fuckhonoka">
                    <div class="card rounded-100 animated fadeIn" id="logincard" style="width:20%">
                        <div class="card-header">
                            <h3 class="mb-0">SignUp</h3>
                        </div>
                        <div class="card-body">
                            <!--<form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">-->
                            <!--    <div class="form-group">-->
                            <!--        <label for="uname1">Username</label>-->
                            <!--        <input type="text" class="form-control form-control-sm rounded-10" name="uname1" id="uname1" required="" textarea-style>-->
                            <!--    </div>-->
                                <!--<div class="form-group">-->
                                <!--    <label>Email</label>-->
                                <!--    <input type="email" class="form-control form-control-sm rounded-10" id="em1" required="">-->
                                <!--</div>-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Password</label>-->
                            <!--        <input type="password" class="form-control form-control-sm rounded-10" id="pwd1" required="">-->
                            <!--    </div>-->
                            <!--    <button type="submit" class="btn button" id="btnSignup">SignUp</button>-->
                            <!--</form>-->
                            {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
        
                        {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                        </div>
                        <!--/card-block-->
                    </div>
                    </div>
                    <!-- /form card signup -->
            </tr></table>
            </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="viewd">
                    <div class="blackeffect">
                    <img src="./images/longtoumei.png" id="toumei100"></div>
                    </div>
                </div>
                <div class="carousel-item viewe">
                    <div class="blackeffect">
                    <img src="./images/longtoumei.png" id="toumei100">
                    </div>
                </div>
                <div class="carousel-item viewc">
                    <div class="blackeffect">
                    <img src="./images/longtoumei.png" id="toumei100">
                    </div>
                </div>
          </div>
          <a class="carousel-control-prev" href="#carouselMarthaIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselMarthaIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    <!--/.slider-->
    
</section>    





<!--これ消すとなぜかバグる-->
    <div id="contentzero">
        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
<!--これ消すとなぜかバグる-->


    







     <!--SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- SCRIPTS -->
    <script type="text/javascript" src="../../../js/compiled.min.js"></script>
	<link href="css/animate.css" rel="stylesheet">
	<script src="./js/wow.js"></script>
	<script>
		new WOW().init();
	</script>
		
    <script type="text/javascript" src="http://ravenzdesign.webcrow.jp/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>		
		
    <script>
		// script.js
        $('.main').onepage_scroll({
          sectionContainer: 'section',
          easing: 'ease',
          animationTime: 500,
          
          pagination: false,
        });
	</script>

</body>

</html>
