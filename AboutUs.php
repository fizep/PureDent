<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/about.css">
</head>

<body>

    <?php
    include('includes/header.php');
?>
    <!-- home section starts -->


    <div class="background-image-session"
        style="background: url(assets/images/slider/home.png) no-repeat;background-size: cover; background-position: center; height: 13rem; ">
        <div class="overlay-session"></div>
        <div class="text-session">
            <h1>About Us</h1>
        </div>
    </div>


    <!-- home section ends -->


    <!-- about section starts -->
    <!--  ************************* About Us Starts Here ************************** -->


    <div class="container-about">
        <section class="about">
            <div class="about-image">
                <img src="assets/images/about.png" alt="about image">
            </div>
            <div class="about-content">
                <h2>True Healthcare For Your Family</h2>
                <p>Welcome to Pure Dent, where your smile is our passion! With over 10 years of dedicated service,
                    our experienced team is committed to providing personalized, high-quality dental care in a modern
                    and comfortable setting. From routine check-ups to advanced cosmetic dentistry, we offer a
                    comprehensive range of services tailored to your unique needs.

                    Our decade-long commitment to excellence is reflected in our state-of-the-art clinic,
                    equipped with the latest technology.

                    Your comfort is our priority, and our friendly team ensures a positive and relaxing experience.
                    Trust Pure Dent for a confident and healthy smile, backed by a decade of expertise. Schedule
                    your appointment today and experience the difference of personalized, patient-focused dental care.
                </p>
            </div>
        </section>
    </div>


    <!-- about section ends -->


    <!--###################### unique features ######################  -->


    <section class="feature">
        <div class="container-feature">
            <div class="inner-title">
                <h2>Features that make us unique</h2>
            </div>
            <div class="feature-cards">

                <div class="feature-card">
                    <img src="assets/images/features/f1.png" alt="f1">
                    <h3>Experienced staff</h3>
                    <p>Our dental clinic boasts an experienced staff dedicated to delivering exceptional patient care
                        and expertise. </p>
                </div>
                <div class="feature-card">
                    <img src="assets/images/features/f2.png" alt="f2">
                    <h3>High Technology Facility</h3>
                    <p>Equipped with state-of-the-art technology, our facility ensures the highest standards of
                        precision and efficiency in dental procedures.</p>
                </div>
                <div class="feature-card">
                    <img src="assets/images/features/f3.png" alt="f3">
                    <h3>Easy Booking</h3>
                    <p>Simplify your dental appointments with our easy-to-use website booking system, providing
                        convenience at your fingertips.</p>
                </div>

                <div class="feature-card">
                    <img src="assets/images/features/f4.png" alt="f4">
                    <h3>Best Price Guarantee</h3>
                    <p>Enjoy peace of mind with our best price guarantee, ensuring you receive top-quality dental care
                        at the most competitive rates.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department" style="background-image: linear-gradient(0deg, #001222c3, #001222c3), 
  url(assets/images/services/service-bg.jpeg);">
        <div class="container">

            <div class="inner-title" style="margin-top: -2rem;">

                <h2 style="color:white; text-shadow: 0 0 30px #fff;">Our Services</h2>
                <!-- <p style="color:white;">Take a look at some of our key features</p> -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class=" fa fa-heartbeat"></i> -->
                        <img src="assets/images/services/dental-checkup.png" alt="s1">
                        <h5>Dental Care</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class="faw fa-ribbon"></i> -->
                        <img src="assets/images/services/dental-implant.png" alt="s2">
                        <h5 class="implant">Dental Implants</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class="fa fa-monero"></i> -->
                        <img src="assets/images/services/root-canal.png" alt="s3">
                        <h5 class="root">Root Treatment</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class="fa fa-capsules"></i> -->
                        <img src="assets/images/services/bridge.png" alt="s4">
                        <h5>Bridgework</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class="fa fa-prescription-bottle-alt"></i> -->
                        <img src="assets/images/services/braces.png" alt="s5">
                        <h5 class="cosmetic">Cosmetic Dentistry</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <!-- <i class="faw fa-thumbs-up"></i> -->
                        <img src="assets/images/services/teeth.png" alt="s6">
                        <h5>Dentures</h5>

                    </div>
                </div>
            </div>

        </div>

    </section>



    <!-- =======OUR TEAM======= -->

    <!-- -----------------team? -->
    <div class="container-block container">

        <div class="inner-title">
            <h2>Meet Our Team</h2>
        </div>

        <div class="responsive-container-block teamcard-container">
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team5.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Dr. Michael Barley
                        </p>
                        <p class="text-blk position">
                            Oral Pathologists
                        </p>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team2.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Dr. Kate Eliott
                        </p>
                        <p class="text-blk position">
                            Pedodontists
                        </p>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team3.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Dr. Roger Lubin
                        </p>
                        <p class="text-blk position">
                            Prosthodontists
                        </p>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team6.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Dr. Peter Darcy
                        </p>
                        <p class="text-blk position">
                            Orthodontists
                        </p>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team4.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Dr. Dorothy Smith
                        </p>
                        <p class="text-blk position">
                            General Dentists
                        </p>
                    </div>
                </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img" src="assets/images/team/team1.jpeg">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            Lisa Norton
                        </p>
                        <p class="text-blk position">
                            Nurse
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
?>
</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>