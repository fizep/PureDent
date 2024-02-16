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
    <title>Blog</title>
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/Blog.css">

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
            <h1>Blog</h1>
        </div>
    </div>


    <section class="blog">
        <div class="container-blog">
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog1.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Staying Healthy</span>
                    <a href="Blog-post/blog1.php">
                        <h4>What's the right way to brush your teeth?</h4>
                    </a>
                    <p>A good brush and a bit of technique go surprisingly far to boosting your smile and
                        health.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog2.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Heart Health</span>
                    <a href="Blog-post/blog1.php">
                        <h4>Antibiotics before dental work</h4>
                    </a>

                    <p>Guidelines suggest that people with certain heart conditions take antibiotics before invasive
                        dental procedures. </p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog3.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Dental Care</span>
                    <a href="Blog-post/blog1.php">
                        <h4>You don't say? Myths about teeth</h4>
                    </a>
                    <p>There are many myths and misconceptions about what makes for a healthy smile.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog5.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Dental Care</span>
                    <a href="Blog-post/blog1.php">
                        <h4>Ways to Treat a Toothache if You Can't Get Immediate Dental Care</h4>
                    </a>
                    <p>Ultimately, you’ll need to see a dentist. But there are a few home remedies you can use to ease
                        tooth and gum pain until you get there.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog4.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-brown">Dental Care</span>
                    <a href="Blog-post/blog1.php">
                        <h4>Does Invisalign Really Work?</h4>
                    </a>
                    <p>Is Invisalign worth the hype? Will it work for your teeth-straightening needs?Learn more about
                        the treatment plan, cost, pros, and cons of Invisalign, as well as common misconceptions and how
                        the clear aligners hold up against traditional braces.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog6.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-red">Staying Healthy</span>
                    <a href="Blog-post/blog1.php">
                        <h4>Worried about your child’s teeth? Focus on these 3 things</h4>
                    </a>
                    <p>Tooth decay is the most common cause of toothache among children and tooth decay is a leading
                        cause of preventable hospital admission.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog1.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Staying Healthy</span>
                    <a href="Blog-post/blog1.php">
                        <h4>What's the right way to brush your teeth?</h4>
                    </a>
                    <p>A good brush and a bit of technique go surprisingly far to boosting your smile and
                        health.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog2.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Heart Health</span>
                    <a href="Blog-post/blog1.php">
                        <h4>Antibiotics before dental work</h4>
                    </a>

                    <p>Guidelines suggest that people with certain heart conditions take antibiotics before invasive
                        dental procedures. </p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                    <img src="assets/images/blog/blog3.jpeg" alt="card__image" class="card__image" width="600">
                </div>
                <div class="card__body">
                    <span class="tag tag-blue">Dental Care</span>
                    <a href="Blog-post/blog1.php">
                        <h4>You don't say? Myths about teeth</h4>
                    </a>
                    <p>There are many myths and misconceptions about what makes for a healthy smile.</p>
                </div>
                <div class="card__footer">
                    <div class="user">
                        <!-- <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image"> -->
                        <div class="user__info">
                            <h6>Heidi Godman, Executive Editor, Harvard Health Letter</h6>
                            <small>November 23, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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