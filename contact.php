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
    <title>Contact Page</title>
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/contact-css.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />


</head>



<body>

    <?php
    include('includes/header.php');
?>

    <div class="img-session"
        style="background: url(assets/images/slider/home.png) no-repeat;background-size: cover; background-position: center; height: 13rem; ">
        <div class="overlay-img"></div>
        <div class="text-session">
            <h1>Contact Us</h1>
        </div>
    </div>


    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
    </div>
    <div class="container-box">
        <div class="columns">
            <div class="column">
                <div class="box">
                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                    <p>28 Jackson St, Chicago,<br>
                        7788569 USA</p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                    <p>+11 22 33 44 55</p>
                    <p>+11 225 225 000</p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                    <p>puredent@gmail.com</p>
                    <p>info@puredent.com</p>


                </div>
            </div>
        </div>
    </div>

    <div class="contact_us_2">
        <div class="responsive-container-block big-container">
            <div class="formBG">
            </div>
            <div class="responsive-container-block container">
                <form class="form-box" method="post">
                    <div class="container-block form-wrapper">
                        <p class="text-blk contactus-head">
                            Send Us a Message
                        </p>
                        <br>
                        <div class="responsive-container-block">
                            <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt">
                                <!-- <p class="text-blk input-title"></p> -->
                                <input type="text" class="input" id="fullname" name="fullname"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <!-- <p class="text-blk input-title"></p> -->
                                <input type="email" class="input" id="email" name="emailid"
                                    placeholder="Enter your email address" required>
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <!-- <p class="text-blk input-title"> </p> -->
                                <input type="number" class="input" id="mobileno" name="mobileno"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <!-- <p class="text-blk input-title"> </p> -->
                                <input type="text" class="input" id="subject" name="subject"
                                    placeholder="Enter the subject">
                            </div>

                            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i">
                                <!-- <p class="text-blk input-title"></p> -->
                                <textarea class="textinput" id="i5vyy" placeholder="Enter your message"
                                    name="description" required></textarea>
                            </div>
                        </div>
                        <button class="submit-btn" type="submit" name="submit">
                            Submit
                        </button>
                    </div>
                </form>
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