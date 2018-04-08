<?php
ob_start();
session_start();
?>
<html>
<head>
    <title>hotel dishes system</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="promo.js">
    <link href="promo.css" type="text/css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .dos
        {
            font-size: medium;
        }
        .kol
        {
            background-image: url("robin-2900029_1920.jpg");
            background-size: cover;
            height: 570px;
            border: 1px solid black;
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
        .frt
        {
            color: aqua;
        }
        .trf
        {
            color: aqua;
            font-size: 22px;

        }


        .blue-3d-text {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            border: none;
            font: normal 4em/normal "Arvo", Helvetica, sans-serif;
            color: rgb(228, 243, 249);
            text-align: center;
            -o-text-overflow: clip;0
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

        .blue-3d-text{
            text-shadow: -2px -2px 1px rgb(255,255,255) , -1px -1px 1px rgb(255,255,255) , 1px 1px 1px rgba(232,247,255,0.901961) , 2px 3px 1px rgba(28,67,103,0.498039) , 5px 5px 12px rgba(5,13,20,0.498039) ;
            -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
        }
        .rtx
        {
            border: 1px solid white;
        }
        .yut
        {
            width: 400px;
            height: 300px;
            align-self: auto;
        }
        .uyt
        {

        }
        .uyt:hover
        {
            box-shadow: 2px 2px 2px 2px gold;
        }
        .lol
        {
            text-shadow: 4px 9px greenyellow;
            font-size: 180px;
        }
        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px hotpink;
        }
        .lom
        {
            background-color: orchid;
        }
        .lom:hover
        {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .polpo
        {
            position: absolute;
            top: 1043px;
            left: 1070px;
            font-size: 20px;
            color: royalblue;
        }
        .solpo
        {
            position: absolute;
            top: 1043px;
            left: 1070px;
            font-size: 20px;
            color: orangered;
        }
        .lol
        {
            text-shadow: 4px 9px greenyellow;
            position: absolute;
            top:80px;
            right: 170px;
            font-size: 180px;
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
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron kol">
            <div class="blue-3d-text wow flip">TRIMAX</div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading"><b>Most Welcome in pizzahunt</b></div>
        <div class="col-md-12">
            <br>
            <br>
            <img src="https://cdn.pixabay.com/photo/2017/02/15/10/57/pizza-2068272__340.jpg" class="img-circle img-responsive yut">
            <h1 class="text lol">Trimax</h1>
        </div>
        <div class="panel-body">
            <li>Pizza hunt yummy!!!(-:</li>
            <li> <b>kadi is hub of pizza</b></li>
            <li><b>pizza hunt is good store in kadi</b></li>
            <li><b>160/- unlimited pizza </b></li>
            <li>35 types pizza flavour in pizzahunt</li>
            <form class="navbar-form navbar-right" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="apply trimax promocode" name="promocode" required>
                </div>
                <button type="submit" class="btn lom" name="apply" >apply</button>
            </form>

            <form action="bookingpizza.php">
                <br>
                <br>
                <button type="submit" class="btn btn-success" name="booking">Book the pizzahunt</button>
            </form>
        </div>
        </ul>
    </div>
</div>
</div>
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
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','trimax');
if(isset($_POST['apply']))
{
    $user = $_SESSION['uname'];
    $_SESSION['promo'] = $_POST['promocode'];
    $pop = $_SESSION['promo'];
    switch ($pop) {
        case 'trimaxlove':
            echo "<p class='polpo'>35% cashback</p>";
            break;
        case 'trimaxholi':
            echo "<p class='polpo'>surprise Gift card </p>";
            break;
        case 'trimaxdarshit':
            echo "<p class='polpo'>20% cashback</p>";
            break;
        case 'trimaxfamily':
            echo "<p class='polpo'>19% cashback</p>";
            break;
        case 'trimaxnacho':
            echo "<p class='polpo'>50% cashback</p>";
            break;
        default:
            echo "<p class='solpo'> promocode invalid</p>";
    }$query = "INSERT INTO promocode(promocode,user,hotel) VALUES ('$pop','$user','hotel pizzahunt')";
    $run = mysqli_query($con, $query);
}
?>
