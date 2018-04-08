
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
        .qww
        {
            color: fuchsia;
        }
        .ola
        {
            background-color: lightskyblue;
        }
        .rew
        {
            color: black;
            font-size: 18px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <ul class="nav nav-tabs navbar-inverse nav-pills navbar-fixed-top sol">
            <li><a href="index.php"><strong class="dos"><span class="glyphicon glyphicon-home frt"></span>Home</strong></a></li>
            <li><a href="courierproblem.php"><strong class="dos"><span class="glyphicon glyphicon-user trf"></span> courier problem</strong></a></li>
            <li><a href="about%202.php"><strong class="dos"><span class="glyphicon glyphicon-record trf"></span>customer courier</strong></a></li>
            <li><a href="login.php"><strong class="dos"><span class="glyphicon glyphicon-log-out trf"></span>logout</strong></a></li>
        </ul>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$con=mysqli_connect('localhost','root','','trimax');
$query="select *from trimax_adress";
$esult=mysqli_query($con,$query);
$sum=mysqli_num_rows($esult);
?>
<h1>trimax customer droping:</h1>
<br>
<table class="table table-bordered table-hover ola">
      <thead>
            <th>Name</th>
            <th>phone number</th>
            <th>adress</th>
            <th>deleivery</th>
      </thead>
    <?php
    for($i=1;$i<=$sum;$i++) {
    $row = mysqli_fetch_array($esult);
    ?>
    <tbody class="rew">
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['adress']; ?></td>
            <td>
                <form  method="post">
                <button type="submit" class="btn btn-danger" value="<?php echo $row['user']; ?>" name="delete">delete</button>
                </form>
            </td>
            <?php
        }
    ?>
    </tbody>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron iop">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="container">
                            <div class="container">
                                <div class="container">
                                    <div class="container">
                                        <h3 class="text you" align="center"><span class="glyphicon glyphicon-leaf"></span> trimax</h3>
                                        <br>
                                        <br><br>
                                        <br>
                                        <p class="text oop" align="center"><span class="glyphicon glyphicon-earphone"></span> help line number                         7984552350 </p>
                                        <br>
                                        <br><br>
                                        <br>
                                        <p class="text oop" align="center">Copyright 2017 trimax | All rights reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','trimax');
if (isset($_POST['delete']))
{
    $uu=$_POST['delete'];
    $query="DELETE FROM `trimax_adress` WHERE user='$uu'";
    $result=mysqli_query($con,$query);
}
?>

