<?php
include_once('../hms/include/config.php');
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

    <link rel="stylesheet" href="../assets/css/Blog.css">
    <link rel="shortcut icon" href="../assets/images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>

    <?php
    include('../includes/header.php');
    ?>

    <div class="img-session"
        style="background: url(../assets/images/slider/home.png) no-repeat;background-size: cover; background-position: center; height: 13rem; ">
        <div class="overlay-img"></div>
        <div class="text-session">
            <h1>Blog</h1>
        </div>
    </div>


    <article>
        <h1>
            <span class="focusing">What's the right way brush your teeth?</span>
        </h1>
        <cite>
            by <span class="name">Heidi Godman, Executive Editor, Harvard Health Letter</span>
        </cite>
        <img src="../assets/images/blog/blog1.jpeg" alt="blog1" />
        <aside>A good brush and a bit of technique go surprisingly far to boosting your smile and health.</aside>
        <main style="font-weight: 300 !important;">
            <p><span class="dropcap">Getting your teeth cleaned professionally feels like a dental health reset.
                </span>Your
                teeth get scrubbed, scraped, and polished to perfection. Whether they stay that way is up to
                you.
                What happens at home (think Vegas rules) can be very different from what happens at the
                dentist's
                office. But don't grit your teeth over it. Check out these three tips to boost your
                tooth-brushing
                game and improve your health in the process.</p><br>
            <h4>1. Understand the incentives.</h4>
            <p>
                Every time you eat or drink something, bits of food or residue can cling to your teeth and gums. The
                debris and its bacteria turn into a sticky film called plaque. If it's left on the teeth too long, it
                calcifies. The hardened plaque is called calculus, and it can't be removed with a toothbrush.

                "Inside the calculus are bacteria that release acids that cause cavities, break down your enamel, and
                tunnel inside the tooth toward the nerve and jaw bone, causing infection if left untreated. From there,
                bacteria can travel to other parts of your body, including the brain, heart, and lungs," says Dr.
                Tien Jiang, a prosthodontist in the Department of Oral Health Policy and Epidemiology at the Harvard
                School of Dental Medicine.

                Plaque-related bacteria can also irritate and infect the gums, which damages gum tissue, ligaments
                holding the teeth in place, and the jaw bone — resulting in tooth loss.

                Knowing all that, it may not be a surprise that poor dental health is associated with health conditions
                such as high blood pressure, heart problems, diabetes, rheumatoid arthritis, osteoporosis, Alzheimer's
                disease, and pneumonia.

            </p><br>
            <h4>2. Select a good toothbrush.</h4>
            <p>
                A dizzying variety of toothbrush options range from simple plastic sticks with bristles to high-tech
                tools with bristles that spin or vibrate. But guess what: "It's not the toothbrush that matters, it's
                the technique," Dr. Jiang says. "You might have a brush that does all the work for you. But if you don't
                have an excellent brushing technique, you'll miss plaque, even with an electric toothbrush."

                So beware of fancy marketing promises that suggest one toothbrush is better than another. Instead, she
                recommends:

                Get a toothbrush you like and will use regularly.
                Choose bristles based on your gum health. "If your gums are sensitive, you'll need soft bristles that
                don't cause irritation. If you don't have gum problems, it's fine to use hard bristles," Dr. Jiang says.
                Replace your toothbrush every few months. "It's time for a new brush if the bristles are splayed out and
                no longer upright, or your teeth don't feel clean after you brush," Dr. Jiang says.
                What if you want an electric toothbrush because holding a brush or brushing with good technique is hard
                for you, or you just enjoy the gadgety-fun appeal of a high-tech brush?

                Dr. Jiang says that's okay, too — whether it's a snazzy device with a timer, pressure sensors, Bluetooth
                connectivity, and apps to guide you through brushing (prices range from $40 to $400) or a basic
                battery-operated gizmo (prices start at $5). "Just try to test out the settings to see if you're
                comfortable with them, and bring the toothbrush to teeth cleanings if you have any questions about how
                to use it," she says.</p><br>
            <h4>3. Use the right brushing technique.</h4>
            <p>
                No matter what kind of toothbrush you use, Dr. Jiang suggests using this brushing method twice daily and
                flossing before or afterward each time:

                Brush with a fluoride toothpaste for two minutes. Divide the time among the upper left, upper right,
                lower left, and lower right teeth — 30 seconds per section.
                Angle the brush. "The bristles should be aimed toward the gums where they meet the teeth, a junction
                where plaque and calculus collect. You don't want the bristles to be perpendicular to your teeth, at a
                90-degree angle, but angled, at a 45-degree angle," Dr. Jiang says.
                Make circles with the bristles. "Rotate the bristles around and around in a gentle sweeping motion to
                help grab debris at the gum line," Dr. Jiang says.
                Brush without distractions so you can focus on your brushing technique.
                Be gentle. If you press too hard while brushing, you'll irritate and possibly injure your gums. Brush
                your tongue, too. It collects loads of bacteria that need to be brushed away.
                Rinse your mouth and your brush. Wash away all traces of toothpaste and food debris.
                Take a peek at your gums. When you finish brushing, pull your lips away from your teeth to see if you
                left food particles around your teeth. Your gums should not look red or swollen.
                Not sure you're brushing the right way? Dr. Jiang suggests practicing without toothpaste. When you rub
                your tongue against your teeth, everything should feel smooth.

                See a dental hygienist for cleanings every six months, and your dentist at least once a year — even if
                these visits make you anxious. And if you notice any problems between visits, give the dental team a
                call. But remember: much of the work in keeping your teeth clean comes from good home habits, not the
                dentist's office.</p>
        </main>
    </article>
    <?php
    include('../includes/footer.php');
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