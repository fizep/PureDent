<!-- ################# Footer Starts Here#######################--->


<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <h2>PureDent</h2><br>
                <ul class="list-unstyled link-list">
                    <p>Our focus is on your overall well-being and helping you
                        achieve optimal health and esthetics. We provide state of the art dental care.
                        Dentistry is the science and art of preventing, diagnosing,
                        treating, injuries and disease.</p>

                    <!-- <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li> -->
                </ul>
            </div>

            <div class="col-md-4 col-sm-12">
                <h2>Quick Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="index.php #about_us">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="portfolio" href="index.php #services">Services</a><i class="fa fa-angle-right"></i>
                    </li>
                    <li><a ui-sref="products" href="index.php #logins">Logins</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="gallery" href="index.php #gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="contact" href="contact.php">Contact us</a><i class="fa fa-angle-right"></i>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-12 map-img">
                <h2>Working hour</h2>
                <address class="md-margin-bottom-40">

                    <?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

                    Monday – Friday: <?php  echo $row['OpenningTime'];?><br>
                    Saturday: 10am - 3pm<br>
                    Sunday: Closed <br><br>
                    <?php  echo $row['PageDescription'];?> <br>
                    Phone: <?php  echo $row['MobileNumber'];?> <br>
                    Email: <a href="mailto:<?php  echo $row['Email'];?>"
                        class="emailadd"><?php  echo $row['Email'];?></a><br>

                </address>
                <div>
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.google.com/" class="fa fa-google-plus"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>

                <?php } ?>





            </div>
        </div>
    </div>


</footer>
<div class="copy">
    <div class="container">
        Copyright &copy2023 <strong><i>PureDent</i></strong>. All rights reserved <i>Fize Pollozhani</i>.


    </div>

</div>