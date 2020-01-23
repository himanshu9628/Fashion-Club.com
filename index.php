<html lang="en">
<head>
<title>Fashion Club</title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 
   <header class="body-row-main-header" id="home"></header>
        <nav class="navbar navbar-expand-lg nav-tabs nav-fixed navbar-dark bg-light">
            <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbar" aria-control="navbar" aria-expanded="false" aria-label="toggle navigation">
                <span  class="navbar-toggler-icon"></span>
            </button>
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-dark" href="index.php"><h4 class="text-danger">FASHION CLUB</h4></a>
            </nav>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="#men"><b>MEN</b></a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link text-dark" href="#women"><b>WOMEN</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="modal" data-target="#kids"><b>KIDS</b></a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#home&L"><b>HOME & LIVING</b></a>
                    </li>   
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link text-dark dropdown-toggle" id="map" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b>DISCOVER</b>
                            </a>
                            <div class="dropdown-menu bg-info" aria-labelledby="map">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another Action</a>
                                <a class="dropdown-item" href="#">Somthing else</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                    <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                    </li>
                    <li class="nav-item">
                            <!--button to open login-->
                            &nbsp;
                            <a href="#"class="text-body" data-toggle="modal" data-target="#mymodal"><i style="font-size: 2rem" class="fa fa-user mx-sm-3 "><br><span style="font-size:1rem;">USER</span></i></a>
                            <!--login-->
                            <div class="modal" id="mymodal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <!--header-->
                                        <button type="button" class="close text-danger text-right pr-sm-3 pt-sm-2" data-dismiss="modal">&times;</button>
                                        <!--body-->
                                        <div class="modal-body">
                                            <div class="container">
                                                <h5 class="text-center">Login to Fashion Club</h5><br><br>
                        
                                                    <form action="login.php" method="POST">    
                                                        
                                                        <form-group>
                                                            <label for="Uname"> </label>
                                                            <input type="text" name = "user"class="form-control" id="Uname" placeholder="User Name">
                                                        </form-group> 
                                                        
                                                        <form-group>
                                                            <label for="pwd"></label>
                                                            <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                                                        </form-group><br>
                                                        
                                                        <button type="submit" class="btn btn-primary btn-block ">Login</button> 
                                                        <br>
                                                        <!--button for forgot password-->
                                                        <!-- <a href="#" data-toggle="modal" data-target="#my12" style="float: center">Forgot  Password?</a> -->
                                                        <!--Forgot Password-->
                                                        <!-- <div class="modal" id="my12">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                        <button type="button" class="close text-danger text-right pt-sm-2 pr-sm-3" data-dismiss="modal">&times;</button>
                                                                
                                                                body-->
                                                                <!-- <div class="container-fluid  jumbotron bg-light">
                                                                <div class="modal-body">
                                                                    
                                                                    <div class="container">
                                                                        <h2 class="text-center">Forgot Password?</h2><br><br>
                                                                        <p style="font-size: 1rem">We will send you a link to reset your password. </p><br>
                                                                                                                
                                                                        <form class="bg-white">
                                                                            <form-group>
                                                                                <label for="emailtype"> Enter Email Address</label>
                                                                                    <input type="email" class="form-control" id="emailtype" placeholder="Enter Email Address">
                                                                            <form-group>  
                                                                            <br> 
                                                                            <input type="submit" class="btn btn-primary btn-block" value="Send Reset Link"> <br><br><br>
                                                                        </form> 
                                                                    </div>
                                                                </div></div></div>
                                                            </div>
                                                        </div>   -->
                                                    </form> 
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                                <!--button to open registation-->
                                            <h5>New to Fashion Club <a  href="#" data-toggle="modal" data-target="#my">Create Account </a></h5>
                                            <!--REgistation-->
                                            <div class="modal" id="my">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!--header-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-tittle">Registation</h4>
                                                            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!--body-->
                                                        <div class="modal-body text-white" style="background-image: url('images/glare_background_blur_dark_63553_1920x1080.jpg');height: 60%; width: 100%">
                                                            <div class="container">
                                                                
                                                                    <form action="fregistation.php" method="POST">
                                                                        <form-group>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <label for="firstname">First Name</label>
                                                                                    <input type="text" name="fname" class="form-control" id="firstname" placeholder="First Name">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="secondname">Last Name</label>
                                                                                    <input type="text" name="lname" class="form-control" id="secondname" placeholder="Last Name">
                                                                                </div>    
                                                                            </div>    
                                                                        </form-group>
                                                                        <form-group>
                                                                            <label for="emailtype">User Name</label>
                                                                            <input type="text" name="user" class="form-control" id="uname" placeholder="User Name">
                                                    
                                                                        </form-group>
                                                                        <form-group>  
                                                                        <form-group>
                                                                            <label for="emailtype">Enter Email</label>
                                                                            <input type="email" name="emailid" class="form-control" id="emailtype" placeholder="Email">
                                                                            <div class="invalid-feedback">Enter valid Email</div>
                                                                        </form-group>
                                                                        
                                                                        <form-group>
                                                                            <label for="pwd1">Password</label>
                                                                            <input type="password" name="password" class="form-control" id="pwd1">
                                                                        </form-group>
                                                                        
                                                                        <form-check class="mx-sm-4">                                                                
                                                                            <input type="checkbox" class="form-check-input" id="check">
                                                                            <label class="form-check-lable" for="check">I accept the <a class="text-white" href="#">Terms of Uses</a> & <a class="text-white" href="#">Privacy policy</a></label>
                                                                            <div class="invalid-feedback">You must agree before submitting</div>
                                                                        </form-check><br> 
                                                                        <input type="submit" class="btn btn-primary" value="submit"> 
                                                                    <br><br><br>
                                                                    
                                                                        </form> 
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- <div class="model-footer">
                                                            <button type="button" class="btn btn-primary">Submit</button>
                                                        </div> -->
                                                    </div>
                                                </div>  
                                            </div>
                                            </div>
                                    </div>
                                </div>  
                            </div>
                        </li>
        
                        <li><div class="icon-bar">
                            <a href="#"><i  style="font-size: 2rem;"class="fa fa-shopping-bag text-body"><br><span style="font-size: 1rem">Bag</span></i></a>
                            </div> 
                        </li> 
                </ul>
                   
            </div>
        </nav>
    </header><br>
    <!--slider-->
    <div id="myntra" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li data-target="myntra" data-slide-to="0" class="active"></li>
            <li data-target="myntra" data-slide-to="1"></li>
            <li data-target="myntra" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/C.jpg"  height="80%" width="100%" class=" img-fluid d-block w-100" alt="school">
            </div>
            <div class="carousel-item">
                <img src="images/abc.jpg" height="80%" width="100%" class="img-fluid d-block w-100" alt="schol1">
            </div>
            <div class="carousel-item">
                <img src="images/b.jpg" height="80%" width="100%" class="img-fluid d-block w-100" alt="achool3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#aboutschool" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#aboutschool" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <br>
    <div class="container-fluid">
        <div class="jumbotron-fluid-responsive">
            <div class="row">
                <div class="col-6 col-lg-3 card-text text-dark   ">
                    <center><img src="images/card5.jpg" height="60%" width="80%" class="img-fluid" alt=".."></center>
                    <div class="card-body">
                        <p  class="card-tittle    "><u>HOT DEALS</u></p> </h>
                        <h6  class="card-text">BUY 1, GET 1<br> & MORE DEALS </h5>
                        <p  class="card-text">+ SHOP NOW</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 text-dark">
                    <center><img src="images/card12.jpg" height="60%" width="80%" class="img-fluid " alt=".."></center>
                    <div class="card-body">
                            <p class="card-tittle    "><u>HOT DEALS</u></p> </h>
                            <h6 class="card-text ">EXTRA 5% OFF ON ₹1799<br></h6>
                            <p  class="card-text ">CODE : SAVES</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 text-dark  ">
                    <img src="images/card9.jpg" height="60%" width="80%"  style="margin-left: 10%" class="img-fluid" alt="..">
                    <div class="card-body">
                        <p class="card-tittle    "><u>HOT DEALS</u></p> </h>
                        <h6 class="card-text ">FREE DELEVERY ON YOUR FIRST ORDER </h6>
                        <p  class="card-text ">+ SHOP NOW</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 text-dark   ">
                    <img src="images/card10.jpg" height="60%" width="80%" class="img-fluid" alt="..">
                    <div class="card-body">
                        <p  class="card-tittle    "><u>HOT DEALS</u></p></h>
                        <h6 class="card-text ">EXTRA 20% OFF<br> & MORE DEALS </h6><br>
                        <p  class="card-text ">+ EXPLORE</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
        <br><br><br>


    



</body>
</html>