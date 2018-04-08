<?php
ob_start();
session_start();
?>
<html>
<head>
    <title>hotel dishes system</title>
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
        .ppo
        {
            position: absolute;
            top: 125px;
            left: 360px;
            color: orange;
            font-size: 20px;
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
    <div class="row">
        <ul class="nav nav-tabs navbar-inverse nav-pills navbar-fixed-top sol wow bounce">
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
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Login Form</div>
                <div class="panel panel-body">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2">username:</label>
                            <div class="col-sm-6">
                                <p class="ppo">
                                    <?php
                                        function ferd()
                                        {
                                            echo "<p class='ppo'>sorry user!you also login so you not make same account</p>";
                                        }
                                    ?>
                                </p>
                                <p class="ppo">
                                    <?php
                                    function refr($uname)
                                    {
                                        echo "<p class='ppo'>your"."    ".$uname."  "."not consider that username</p>";
                                    }
                                    ?>
                                </p>

                                <input type="text" class="form-control" placeholder="username" name="user" required/>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="control-label col-sm-2">password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" placeholder="password" name="password" required/>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="control-label col-sm-2">confirmation password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" placeholder="confirmation password" name="confirmation" required/>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-5">
                            <input type="submit" class="btn btn-success" value="submit" name="submit">
                            <button type="reset" class="btn btn-danger">cancel</button>
                        </div>
                    </form>
                </div>
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
if(isset($_POST['submit']))
{
    $_SESSION['uname'] = $_POST['user'];
    $uname=$_SESSION['uname'];
    $_SESSION['password'] = $_POST['password'];
   $password=$_SESSION['password'];
   $_SESSION['confirm']=$_POST['confirmation'];
    $confirm =$_SESSION['confirm'];
    $query="select *from username WHERE username='$uname'";
    $result=mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($result);
    if ($rowcount == TRUE)
    {
        ferd();
    }
    elseif ($uname>0)
    {
        refr($uname);
    }
    else
    {
        if($password == $confirm)
        {
            if($password>0)
            {
                $query = "INSERT INTO username(username,password,confirmation) VALUES ('$uname',$password,$confirm)";
                $run = mysqli_query($con, $query);
                header("location:userenter.php");
            }
            else
            {
                header("location:error1.php");

            }

        }
        else
        {
            header("location:error.php");
        }
    }
}
?>

