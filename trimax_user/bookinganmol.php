<html>
<head>
    <title>hotel dishes system</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
        .pop
        {
            background-color: orange;
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
        .yut
        {
            width: 400px;
            height: 300px;
            align-self: auto;
        }
        .lol
        {
            text-shadow: 4px 9px greenyellow;
            position: absolute;
            top:80px;
            right: 170px;
            font-size: 180px;
        }
        .rte
        {

        }
        .rte:hover
        {
            background-color: #b2dba1;
        }
        .rer
        {
            border: 1px solid black;
        }
        .iop
        {
            border: 1px solid black;
        }
        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px cornflowerblue;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <ul class="nav nav-tabs navbar-inverse nav-pills navbar-fixed-top sol">
            <li><a href="userenter.php"><strong class="dos"><span class="glyphicon glyphicon-home trf"></span> Home</strong></a> </li>
            <li><a href="hotelbook.php"><strong class="dos"><span class="glyphicon glyphicon-leaf trf"></span>Hotel Book/Fast Food</strong></a></li>
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
            <div class="blue-3d-text">TRIMAX</div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-md-4">
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
        </div>
        <div class="col-md-4">
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>

        </div>
        <div class="col-md-4">
            <input type="checkbox"> <img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
            <input type="checkbox"><img src="gangotritable-100.png" class="rte">
            <br>
        </div>
        <div class="col-md-2">
            <input type="checkbox"> <img src="icons8-table-100%20(1).png" class="rte">
            <br>
        </div>
        <div class="col-md-2">
            <input type="checkbox"> <img src="icons8-table-100%20(1).png" class="rte">
            <br>
        </div>

    </div>
</div>
<br>
<br>
<form action="hotel%20gangotri%20adress.php">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">

        <button type="submit" class="btn btn-success">submit</button>
        <button type="reset" class="btn btn-danger">cancel</button>
    </div>
</form>
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
</body>
</html>