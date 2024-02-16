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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PureDent</title>
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="assets/images/fav.jpg"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- ################# Header Starts Here#######################--->


    <?php
    include('includes/header.php');
?>

    <section class="container-session">
        <div class="background-image-session"
            style="background: url(assets/images/slider/home.png) no-repeat;background-size: cover; background-position: center; height: 33rem; ">
            <div class="overlay-session"></div>
            <div class="content-session">
                <h1>We Care about Your Dental Health</h1>
                <p>If you are in need of high-quality, professional and friendly dental care, look no further than
                    our
                    clinic.
                </p>
                <div class="appoint-session">
                    <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                </div>
            </div>
        </div>
    </section>


    <!--  ************************* About Us Starts Here ************************** -->

    <div class="container-about">
        <section class="about">
            <div class="about-image">
                <img src="assets/images/about.png" alt="about image">
            </div>
            <div class="about-content">
                <h2>True Healthcare For Your Family</h2>
                <p>Welcome to Pure Dent, where your smile is our priority! Our dedicated team provides
                    personalized, high-quality dental care in a modern and comfortable environment. From routine
                    check-ups to advanced cosmetic dentistry, we offer comprehensive services to meet your
                    needs. We prioritize preventive care and use the latest technology to ensure optimal oral
                    health. Your comfort is our top priority, and we strive to create a positive atmosphere.
                    Trust Pure Dent for a confident and healthy smile. Schedule an appointment today!
                </p>
                <a class="btn btn-success" href="AboutUs.php">Read More</a>
            </div>
        </section>
    </div>

    <!-- <section id="about_us" class="about-us">
        <div class="container"> -->

    <!-- <div class="info">
        <div class="area1"></div>
        <div class="area2">
            <h2>True Healthcare For Your Family</h2>
            <div>
                <p>Welcome to Pure Dent, where your smile is our priority! Our dedicated team provides
                    personalized, high-quality dental care in a modern and comfortable environment. From routine
                    check-ups to advanced cosmetic dentistry, we offer comprehensive services to meet your
                    needs. We prioritize preventive care and use the latest technology to ensure optimal oral
                    health. Your comfort is our top priority, and we strive to create a positive atmosphere.
                    Trust Pure Dent for a confident and healthy smile. Schedule an appointment today!
                </p>
                <br>
                <div class="info-session">
                    <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                </div>
            </div>



        </div>
    </div> -->

    <!-- <div class="row no-margin">
                <div class="col-sm-6 image-bg no-padding">
<?php
                    $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
                    while ($row=mysqli_fetch_array($ret)) {
                    ?><p class="ellipsistext"><?php  echo $row['PageDescription'];?></p><?php } ?>
                </div>
                <div class="col-sm-6 abut-yoiu">

                    <?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

                    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
                </div>
            </div> -->
    <!-- </section> -->


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
                    <p>Our dental clinic boasts an experienced staff dedicated to delivering exceptional patient
                        care
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
                    <p>Enjoy peace of mind with our best price guarantee, ensuring you receive top-quality dental
                        care
                        at the most competitive rates.</p>
                </div>

            </div>
        </div>
    </section>


    <!--  ************************* Logins ************************** -->


    <section id="logins" class="our-blog container-fluid">
        <div class="container">
            <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">


                            <div class="blog-single-det">
                                <img src="assets/images/login/patient.png" alt="">

                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">



                            <div class="blog-single-det">
                                <img src="assets/images/login/dentist.png" alt="">
                                <h6>Doctors Login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">


                            <div class="blog-single-det">
                                <img src="assets/images/login/admin3.png" alt="">

                                <h6>Admin Login</h6>

                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>






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

    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">

            <div class="inner-title">
                <h2 style="margin-bottom:-1rem;">Our Gallery</h2>
            </div>

            <div class="row">

                <div class="gallery-filter  d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="dent">Dental Care</button>
                    <button class="btn btn-default filter-button" data-filter="client">Patients</button>
                    <button class="btn btn-default filter-button" data-filter="pedi">Pediatric Dentistry</button>
                    <button class="btn btn-default filter-button" data-filter="work"> Working Staff</button>
                    <button class="btn btn-default filter-button" data-filter="clinic">Our Clinic</button>
                </div>
                <br>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dent">
                    <img src="assets/images/gallery/g6.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter client">
                    <img src="assets/images/gallery/g4.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter clinic">
                    <img src="assets/images/gallery/g12.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pedi">
                    <img src="assets/images/gallery/g20.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter work">
                    <img src="assets/images/gallery/g8.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dent">
                    <img src="assets/images/gallery/g11.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter work">
                    <img src="assets/images/gallery/g10.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter clinic">
                    <img src="assets/images/gallery/g22.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter client">
                    <img src="assets/images/gallery/g23.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter clinic">
                    <img src="assets/images/gallery/g2.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pedi">
                    <img src="assets/images/gallery/g19.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dent">
                    <img src="assets/images/gallery/g7.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter client">
                    <img src="assets/images/gallery/g17.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter work">
                    <img src="assets/images/gallery/g26.jpeg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pedi">
                    <img src="assets/images/gallery/g3.jpeg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- ######## Gallery End ####### -->


    <!-- CLIENT SLIDER -->

    <section id="testimonials">
        <!--heading--->
        <!-- <div class="inner-title">
            <h2>What Our Clients Says</h2>
        </div> -->

        <!-- <div class="testimonial-heading">
            <span>Comments</span>
            <h1></h1>
        </div> -->

        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="assets/images/login/profilepicture.jpg">
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Adam Thomson</strong>
                            <span>@thomsonadam</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>We had a very pleasant experience with Dr. Kate and her staff. My daughter was very anxious
                        about the appointment and any procedure, but Dr. Kate was very patient with her and spend a
                        lot
                        of time trying to calm her down, the staff was very helpful and kind and always available to
                        help.</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="assets/images/login/profilepicture.jpg">

                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Julia Russell</strong>
                            <span>@juls</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>I highly recommend this dental clinic, visited recently as a new patient for a root canal
                        treatment and got the desired results. I
                        was at ease within minutes because of the skilled professional doctor working with latest
                        technology. Well maintained and a very hygienic clinic .</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="assets/images/login/profilepicture.jpg">

                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Blake Henderson</strong>
                            <span>@blakeH</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>I went for a teeth cleanup and the best thing was throughout my clean up there was no damage
                        to
                        my
                        gums and no sign of blood. I have had horror experiences in the past with other dentists.
                        This
                        was the best cleanup I had by far ever.</p>
                </div>
            </div>
            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="assets/images/login/profilepicture.jpg">
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliva</strong>
                            <span>@Olivaadward</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Very professional dentist, super helpful to take an emergency for a broken tooth and to find
                        a
                        solution in doing a crown in 24h. Highly meticulous and great quality of work. Very
                        reassuring
                        by giving clear and detailed explaination. Strongly recommended especially for foreigners.
                        Thank
                        you for the overtime. </p>
                </div>
            </div>
        </div>
    </section>


    <br><br><br>


    <!-- PRICING TABLE -->

    <div class="background"
        style="background: url(assets/images/slider/home.png) no-repeat; position:relative; background-size: cover; background-position: center; height: 15rem; ">
        <div class="pricing-table-overlay"></div>
        <div class="container">
            <div class="pricing-table-content">
                <h1>Book an appointment online!</h1>
                <div class="col-sm-2  d-lg-block appoint-pricing-table">
                    <a class="btn btn-pricing" href="hms/user-login.php">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Footer Starts Here#######################--->

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