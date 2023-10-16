<?php
require("config.php");
$id=$_GET['id'];
$sql1="select * from product where id='$id'";
if(mysqli_query($con,$sql1))
{
    echo "Updated";
}
else
{
    echo "Not Updated";
}
?>	

	
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

 
     <!-- Navbar Start -->
     <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-10" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand" style="margin-left:-40px">
                <h6 class="display-4 text-uppercase text-white mb-5"> Vishaka<span class="text-primary"> Industries</span></h6>
                 </a>
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                        <?php
                            $sql="select * from product";
                            $rs=mysqli_query($con,$sql);
                            $rw= mysqli_fetch_row($rs);
                            ?>
                        <a href="product.php?id=<?php echo$rw[0];?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Product</a>
                        
                            <div class="dropdown-menu rounded-0 m-0">
                            <?php
                            $sql="select * from product";
                            $rs=mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_row($rs)){
                            ?>
                                <a href="product.php?id=<?php echo$rw[0];?>" class="dropdown-item"><?php echo$rw[2];?></a>
                                <?php
                            }
                            ?>
                            </div>
                           
                        </div>
                        
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                        <a href="enquiry.php" class="nav-item nav-link">Enquiry</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

  
    <div class="container-fluid py-5 mb-5 wow fadeIn" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/innerbg.jpg) center center no-repeat; background-size: cover;" data-wow-delay="0.1s"> 
      
    <div class="container py-5">
    <?php
     $sql="select * from product where id='$id'";
     $rs=mysqli_query($con,$sql);
     $rw=mysqli_fetch_row($rs)
     ?>
            <h6 class="display-1 text-white animated slideInDown" style="font-size:50px;text-align:center;"><?php echo$rw[2];?></h6>
           
            <a href="index.php" ><h4 style="text-align:center; color:white;">Home</a>/&nbsp;Dobby Border Towel</h4>
            
        
        
                
        </div>
       
    </div>
   

    <!-- Page Header Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                    <?php
					$sql="select * from product where id='$id'";
                    $rs=mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_row($rs))
                    {
                    ?>
                        <img class="img-fluid" src="img/<?php echo $rw[1];?>" alt="" style="height:px;width:px;">
                    <?php
                    }
                    ?>

                    </div>
                </div>
                
    <!-- Contact Start -->
    <?php
					$sql="select * from product where id='$id'";
                    $rs=mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_row($rs))
                    {
                    ?>
    <table border=2 class="table"  style="height:360px;width:500px;">
								<tr style="color:black;">
									<th scope="col"  style="background-color:Magenta;">Id</th>
                                    <td><?php echo $rw[0];?></td>
                                    <tr style="color:black;">
									<th scope="col" style="background-color:Magenta;">Title</th>
                                    <td><?php echo $rw[2];?></td>
                                  </tr> 
                                   <tr style="color:black;">
									<th scope="col" style="background-color:Magenta;">Materials</th>
                                    <td><?php echo $rw[3];?></td>
                                    </tr>
                                    <tr style="color:black;">
                                    <th scope="col" style="background-color:Magenta;">Quality</th>
                                   <td><?php echo $rw[4];?></td>
 
                                    </tr>
                                    <tr style="color:black;">
                                    <th scop="col" style="background-color:Magenta;">Use</th>
                                   <td><?php echo $rw[5];?></td>

                                    </tr>
                                    <tr style="color:black;">
									<th scop="col" style="background-color:Magenta;">Sizes</th>
                                   <td><?php echo $rw[6];?></td>

                                </tr>
                                    <tr style="color:black;">
									<th scop="col" style="background-color:Magenta;">Gms</th>
                                   <td><?php echo $rw[7];?></td>

                                    </tr>
                                    <tr style="color:black;">
                                    <th scop="col" style="background-color:Magenta;">Colors</th>
                                   <td><?php echo $rw[8];?></td>

                                </tr>
							
									</table>
                                    <?php
}
?>
						           
     <!-- Footer Start -->
     <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>D-7/2, MIDC, Akkalkot Road, Solapur - 413 006, Maharashtra, India
</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+912172656377</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>info@vishakatex.com
</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/GNH_5475 copy copy.jpeg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/beach.jpg" alt="" height=70px width=70px></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/DSC_2223.jpeg" alt="" height=70px width=70px></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/DSC_2191.jpeg" alt="" height=70px width=70px></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/DSC_2250.jpeg" alt="" height=70px width=70px></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/th.jpeg" alt="" height=70px width=70px></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its inception in the year 1968, having production capacity of 800 tons of Terry Towel & Toweling cloth annually.

</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>