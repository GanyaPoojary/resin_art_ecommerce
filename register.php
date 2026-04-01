<?php
include "config.php";
$admin=new Admin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resin Art-Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     
     <!-- Main Style CSS -->
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Resin<span class="text-secondary">Art</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="Crafty/index.php" class="nav-item nav-link">Home</a>
                    <a href="Crafty/aboutus.php" class="nav-item nav-link">About Us</a>
                    <a href="Crafty/login.php" class="nav-item nav-link active">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            
                            <a href="Crafty/admin/signin.php" class="dropdown-item">Admin</a>
                            <a href="Crafty/seller/login.php" class="dropdown-item">Seller Page</a>
                           
                        </div>
                    </div>
                    <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2" style="decoration:none;">
            
                <a class="btn btn-primary " style="height:40px; width:100px; " href="login.php" >Login</a>
                </div>
            </div>
        </nav>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Register
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
           
                    <li class="breadcrumb-item text-dark active" aria-current="page">Register</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
    <div class="login-register-area mt-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>
                        <form action="controller/register.php" method="post">
                            
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="tel" placeholder="Phone Number" pattern="[0-9]{1}[0-9]{9}" name="phone" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email or Username" name="email" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="pass" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Enter your Address" name="add" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Enter your City" name="city" required>
                                <input type="text" placeholder="Enter your State" name="state" required>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Enter your Pin" name="pin" required>
                               
                            </div>
                            
                            <div class="single-input-item mb-3">
                              <center>  <button class="btn flosun-button secondary-btn theme-color rounded-0" name="sub">Register</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <br><br><br><br>
    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Experiences from various customers of this Platform</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php  $stmt=$admin->ret("SELECT * FROM `feedback`");
                        while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4"><?php echo $row['f_feedback']?></p>
                    <div class="d-flex align-items-center">
                    <?php $cid=$row['c_id'];
                                                   $stmt2=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
                                                   $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
                                                   ?>
                        <img class="flex-shrink-0 rounded-circle" src="controller/<?php echo $row2['c_profile_pic'] ?>" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1"><?php echo $row2['c_name']?></h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include "mainfooter.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>