<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
?>

<html lang="en">
<head>
<title></title>

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
<style>
.rounded{
    width:100px;
    margin:auto;
}
.rounded img{
    border-radius: 50%;
}
</style>

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
                                            <div class="rounded">
                                                <img src="images\logo.jpg" height ="100px" width="100px">
                                            </div>
                        
                                            <h2 class="text-center text-success"> <?php echo $_SESSION['username'];?></h2>
                                        
                                            <h2 class="text-center text-success">User Id :- <?php echo $_SESSION['userid'];?></h2>
                                            
                                                
                                        
                                    
                                        </div>
                                        <h3 class="text-center"><a href="logout.php" class="text-danger">LOGOUT</a></h3>
                                        <!-- <h3 class=" text-center"><a href="#" class="text-danger" data-toggle="modal" data-target="#my12">LogOut</a>
                                        </h3> -->
                                        <br>
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
    </header>
    <!--slider-->

    <h6 class=""> Welcome  <?php echo $_SESSION['username'];?></h6>

    <div id="myntra" class="carousel slide" data-ride="carousel" data-interval="5000">
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