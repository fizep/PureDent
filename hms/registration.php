<?php
include_once('include/config.php');

$db= $con; // update with your database connection
// by default, error messages are empty
$register=$valid=$fnameErr=$emailErr=$passErr='';
// by default,set input values are empty
$set_firstName=$set_lastName=$set_email='';
extract($_POST);

if(isset($_POST['submit']))
{
  
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";
 //  First Name Validation
if(empty($full_name)){
   $fnameErr="First Name is Required"; 
}
else if (!preg_match($validName,$full_name)) {
   $fnameErr="Digits are not allowed";
}else{
   $fnameErr=true;
}

//Email Address Validation
  if(empty($email)){
    $emailErr="Email is Required"; 
  }
  else if (!preg_match($validEmail,$email)) {
    $emailErr="Invalid Email Address";
  }
  else{
    $emailErr=true;
  }
      
  // password validation 
  if(empty($password)){
    $passErr="Password is Required"; 
  } 
  elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
    $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
  }
  else{
     $passErr=true;
  }

  // check all fields are valid or not
if($fnameErr==1 && $emailErr==1 && $passErr==1)
{
   
// if(isset($_POST['submit']))
// {
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$query=mysqli_query($db,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:user-login.php');
}
// }
    
}else{
    // set input values is empty until input field is invalid
   $set_firstName=$full_name;
   $set_email=    $email;
}
// check all fields are vakid or not
}

// convert illegal input value to ligal value formate
// function legal_input($value) {
//     $value = trim($value);
//     $value = stripslashes($value);
//     $value = htmlspecialchars($value);
//     return $value;
// }
// function unique_email($email){
  
//     global $db;
//     $sql = "SELECT email FROM users WHERE email='".$email."'";
//     $check = $db->query($sql);
  
//    if ($check->num_rows > 0) {
//      return true;
//    }else{
//      return false;
//    }
//   }
  
  // function to insert user data into database table
//   function register($fname,$email,$password){
  
//      global $db;
//      $sql="insert into users(fullName,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')";
//      $query=$db->prepare($sql);
//      $query->bind_param('ssss',$fname,$address,$city,$gender,$email,$password);
//      $exec= $query->execute();
//       if($exec==true)
//       {
//        return "You are registered successfully";
//       }
//       else
//       {
//         return "Error: " . $sql . "<br>" .$db->error;
//       }
//   }



// if(isset($_POST['submit']))
// {
// $fname=$_POST['full_name'];
// $address=$_POST['address'];
// $city=$_POST['city'];
// $gender=$_POST['gender'];
// $email=$_POST['email'];
// $password=md5($_POST['password']);
// $query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
// if($query)
// {
// 	echo "<script>alert('Successfully Registered. You can login now');</script>";
// 	//header('location:user-login.php');
// }
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

    <script type="text/javascript">
    function valid() {
        if (document.registration.password.value != document.registration.password_again.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.registration.password_again.focus();
            return false;
        }
        return true;
    }
    </script>


</head>

<body class="login">
    <!-- start: REGISTRATION -->
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../index.php">
                    <h2>PureDent | Patient Registration</h2>
                </a>
            </div>
            <!-- start: REGISTER BOX -->
            <div class="box-register">
                <form name="registration" id="registration" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit="return valid();">
                    <fieldset>
                        <legend>
                            Sign Up
                        </legend>
                        <p>
                            Enter your personal details below:
                        </p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                value="<?php echo $set_firstName;?>" required>
                            <p class="err-msg" style=" color:red;">

                                <?php if($fnameErr!=1){ echo $fnameErr; }?>
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <label class="block">
                                Gender
                            </label>
                            <div class="clip-radio radio-primary">
                                <input type="radio" id="rg-female" name="gender" value="female">
                                <label for="rg-female">
                                    Female
                                </label>
                                <input type="radio" id="rg-male" name="gender" value="male">
                                <label for="rg-male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <p>
                            Enter your account details below:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    value="<?php echo $set_email;?>" required>
                                <i class="fa fa-envelope"></i> </span>
                            <span id="user-availability-status1" onBlur="userAvailability()"
                                style="font-size:12px;"></span>
                            <p class="err-msg" style=" color:red;">
                                <?php if($emailErr!=1){ echo $emailErr; } ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <i class="fa fa-lock"></i> </span>
                            <p class="err-msg">

                                <?php if($passErr!=1){ echo $passErr; } ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password_again" name="password_again"
                                    placeholder="Password Again" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox clip-check check-primary">
                                <input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
                                <label for="agree">
                                    I agree
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <p>
                                Already have an account?
                                <a href="user-login.php">
                                    Log-in
                                </a>
                            </p>
                            <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> PureDent</span>.
                    <span>All rights reserved</span>
                </div>

            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
    </script>

    <script>
    function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'email=' + $("#email").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status1").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>

</body>
<!-- end: BODY -->

</html>