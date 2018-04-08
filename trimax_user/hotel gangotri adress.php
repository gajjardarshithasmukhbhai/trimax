<?php
ob_start();
session_start();
?>
<html lang="en">
<head>
    <title>Contact V12</title>
    <link rel="icon" type="image/jpg" href="images/darshit.jpg">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .trf
        {
            color: aqua;
            font-size: 22px;

        }
        .dos
        {
            font-size: medium;
        }
        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px hotpink;
        }
        .ytr
        {
            color: orange;
            position: absolute;
            top: 440px;
            left: 680px;
        }
        .wee
        {
            color: orange;
            position: absolute;
            top: 445px;
            left: 680px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <ul class="nav nav-tabs navbar-inverse nav-pills navbar-fixed-top sol wow bounce">
            <li><a href="index.php"><strong class="dos"><span class="glyphicon glyphicon-home trf" aria-hidden="true"></span> Home</strong></a> </li>
            <li><a href="hotelbook.php"><strong class="dos"><span class="glyphicon glyphicon-leaf trf" aria-hidden="true"></span>Hotel Book/Fast Food</strong></a></li>
            <li><a href="accountsummary.php"><strong class="dos"><span class="glyphicon glyphicon-lock trf"></span>account summary</strong></a></li>
            <li><a href="review.php"><strong class="dos"><span class="glyphicon glyphicon-thumbs-up trf"></span>Review</strong></a></li>
            <li><a href="offer.php"><strong class="dos"><span class="glyphicon glyphicon-gift trf"></span>offer</strong></a></li>
            <li><a href="comment.php"><strong class="dos"><span class="glyphicon glyphicon-bell trf"></span>Comment</strong></a></li>
            <li><a href="logout.php"><strong class="dos"><span class="glyphicon glyphicon-log-out trf"></span>logout</strong></a> </li>
        </ul>
    </div>
</div>
        <div class="wrap-contact100">
            <div class="contact100-pic js-tilt" data-tilt>
                <img src="images/darshit.jpg" alt="IMG" class="img-circle">
            </div>
            <form class="contact100-form validate-form" method="post">
					<span class="contact100-form-title">TRIMAX</span>
                <div class="wrap-input100 validate-input" data-validate = "full Name is required">
                    <input class="input100" type="text" name="name" placeholder="fullName">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "phone number">
                    <input class="input100" type="text" name="phone" placeholder="phone number">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "adress is required">
                    <textarea class="input100" name="adress" placeholder="adress"></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit" name="submit">book</button>
                </div>
            </form>
            <div class="col-md-12">
                <div class="col-md-7">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4"><h3>customer care number 7984552350</h3></div>
            </div>
        </div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','trimax');
if(isset($_POST['submit']))
{
    $_SESSION['name'] = $_POST['name'];
    $name=$_SESSION['name'];
    $_SESSION['phone'] = $_POST['phone'];
    $phone=$_SESSION['phone'];
    $_SESSION['adress']=$_POST['adress'];
    $adress =$_SESSION['adress'];
    if(strlen($phone)==10)
    {
        if($name>0)
        {
            echo "<p class='wee'>numerical username value not consider</p>";
        }
        elseif ($adress>0)
        {
            echo "<p class='wee'>numerical adress value not consider</p>";
        }
        else
        {
            $query="INSERT INTO trimax_adress(user,adress,phone_number) VALUES ('$name','$adress',$phone)";
            $result=mysqli_query($con,$query);
            header("location:endingofapp.php");
        }
    }
    else
    {
        echo "<p class='ytr'>the phone number alphabetic value not consider</p>";
    }
}
?>
