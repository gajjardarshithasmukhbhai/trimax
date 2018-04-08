<?php
    ob_start();
    session_start();
?>

<html>
<head>
    <title>hotel dishes system</title>
    <link rel="icon" type="image/jpg" href="images/darshit.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .spk
        {
            font-style: oblique;
            font-weight: 400;
            color: red;
        }
        .kol
        {
            background-image: url("robin-2900029_1920.jpg");
            background-size: cover;
            height: 500px;
        }
        .iop
        {
            background-color: #343a40;
            height: 350px;
        }
        .you
        {
            font-weight: 800;
            color: white;
            position: absolute;
        }
        .oop
        {
            color: white;
            font-weight: 200;
        }
        .dof
        {
            color: #1b1e21;
            font-weight: 800;
        }
        .jok
        {
            color: #1b1e21;
        }
        .frt
        {
            color: aqua;
        }
        .trf
        {
            color: aqua;
        }

        .blue-3d-text {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            border: none;
            font: normal 4em/normal "Arvo", Helvetica, sans-serif;
            color: rgb(228, 243, 249);
            text-align: center;
            -o-text-overflow: clip;
            text-overflow: clip;
            text-shadow: -2px -2px 1px rgb(255,255,255) , -1px -1px 1px rgb(255,255,255) , 1px 1px 1px rgba(232,247,255,0.901961) , 1px 1px 0 rgb(42,101,139) , 2px 2px 0 rgb(41,99,138) , 3px 3px 0 rgb(40,97,136) , 4px 4px 0 rgb(39,95,133) , 5px 5px 0 rgb(38,93,131) , 6px 6px 0 rgb(37,90,128) , 7px 7px 0 rgb(36,87,125) , 8px 8px 0 rgb(35,84,121) , 9px 9px 0 rgb(33,80,117) , 10px 10px 0 rgb(31,76,113) , 11px 11px 0 rgb(30,72,108) , 12px 12px 1px rgba(28,67,103,0.498039) , 14px 14px 12px rgba(5,13,20,0.498039) ;
            -webkit-transition: all 201ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -moz-transition: all 201ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -o-transition: all 201ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            transition: all 201ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            position:absolute;
            left:10px;
            top:60px;
            color: #b2dba1;
        }

        .blue-3d-text {
            text-shadow: -2px -2px 1px rgb(255,255,255) , -1px -1px 1px rgb(255,255,255) , 1px 1px 1px rgba(232,247,255,0.901961) , 2px 3px 1px rgba(28,67,103,0.498039) , 5px 5px 12px rgba(5,13,20,0.498039) ;
            -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
        }
        .dos
        {
            font-size: medium;
        }
        .wwq
        {
            position: absolute;
            top: 170px;
            font-size: 11px;
            color: crimson;
            left: 510px;
        }
        .ooqp
        {
            position: absolute;
            top: 220px;
            font-size: 11px;
            color: crimson;
            left: 510px;
        }

        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px seagreen;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row wow bounce">
        <ul class="nav nav-tabs navbar-inverse nav-pills navbar-fixed-top sol">
            <li><a href="index.php"><strong class="dos"><span class="glyphicon glyphicon-home frt"></span>Home</strong></a></li>
            <li><a href="login%202.php"><strong class="dos"><span class="glyphicon glyphicon-user trf"></span> login</strong></a></li>
            <li><a href="about%202.php"><strong class="dos"><span class="glyphicon glyphicon-pencil trf"></span> About</strong></a></li>
        </ul>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="well text-info ">
                <form class="form-horizontal" method="post" >
                    <div class="form-group">
                            <label class="control-label col-sm-2 wow flip ">user name:</label>
                        <div class="col-sm-10" >
                            <input type="text"  class="form-control" placeholder="username of trimax" name="duser" required/>
                        </div>
                        <br>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 wow flip">password:</label>
                        <div class="col-sm-10">
                            <input type="password"  class="form-control" placeholder="password" name="dpassword" required/>
                        <br>
                        </div>
                    </div>
                <br>
                <br>
                <br>
                    <br>
                    <input type="submit" class="btn btn-success wow bounceIn" value="submit" name="dsubmit">
                <button type="reset" class="btn btn-danger wow bounceIn">cancel</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="well text-info ">
                <p class="jok wow fadeOut">Don't have an account?<a href="sign%20up%202.php">Sign up</a> </p>
                <br>
                <br>
                <br>
                <h3 class="text dof wow fadeOut">Do more with trimax</h3>
                <p class="jok wow fadeOut">With your trimax account you can save and share multiple hotel lists with your fellow hotellers. You can even create price alerts for your upcoming hotel-dishes. We automatically sync your account across all of your devices.</p>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','trimax');
if(isset($_POST['dsubmit']))
{
    $_SESSION['uname']=$_POST['duser'];
    $user=$_SESSION['uname'];
    $_SESSION['password']=$_POST['dpassword'];
    $password=$_SESSION['password'];
    $query="select *from username WHERE username='$user' && password='$password'";
    $result=mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($result);
        if ($rowcount == TRUE)
        {
             header('location:userenter.php');
        }
        else
        {
            echo    "<p class='wwq'>your username is not valid</p>";
            echo    "<p class='ooqp'>your password is not valid</p>";
        }
}
?>
