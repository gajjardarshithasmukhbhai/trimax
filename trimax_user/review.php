<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>hotel dishes system</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
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
            height: auto;
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

        .blue-3d-text {
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
            height: 320px;
            align-self: auto;
            background-image: url("pexels-photo-594077.jpeg");
            background-size: cover;
        }
        .uyt
        {

        }
        .uyt:hover
        {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

        }
        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px darkgoldenrod;
        }
        .gangotri
        {
            height: 320px;
            align-self: auto;
            background-image: url("mount-wilbur-3032430_1920.jpg");
            background-size: cover;

            align-self: auto;
            background-image: url("mount-wilbur-3032430_1920.jpg");
            background-size: cover;

        }
        .prime
        {
            height: 320px;
            align-self: auto;
            background-image: url("prime.jpeg");
            background-size: cover;
        }
        .anmol
        {
            height: 320px;
            align-self: auto;
            background-image: url("anmol hotel.jpeg");
            background-size: cover;
        }
        .pizza
        {
            height: 320px;
            align-self: auto;
            background-image: url("pizza hunt.jpeg");
            background-size: cover;
        }
        .modest
        {

            height: 320px;
            align-self: auto;
            background-image: url("getlstd-property-photo.jpg");
            background-size: cover;
        }
        .rating
        {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,260%) rotateY(180deg);
            display: flex;
        }
        .rating input
        {
            display: none;
        }
        .rating label
        {
            display: block;
            cursor: pointer;
            width: 50px;
            background: white;
        }
        .rating label:before
        {
            content: '\f006';
            font-family: fontAwesome;
            position: relative;
            display: block;
            font-size: 30px;
            color: #101010;
        }
        .rating label:after
        {
            content: '\f005';
            font-family: fontAwesome;
            position: absolute;
            display: block;
            font-size: 30px;
            color: #1f9cff;
            top:0;
            opacity: 0;
            transition: .5s;
            text-shadow: 0 5px 5px rgba(0,0,0,.5);

        }
        .rating label:hover:after,
        .rating label:hover ~ label:after,
        .rating input:checked ~ label:after {
            opacity: 1;
        }
        /*   darshit*/

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
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">Hotel Gangotri place</div>
                <div class="jumbotron gangotri">
                </div>
                <div class="panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>
                    <form action="hotel%20gangotri%20details.php">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">Hotel morli</div>
                <div class="jumbotron yut">
                </div>
                <div class=" panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>

                    <form action="morli%20details.php">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">Hotel prime place</div>
                <div class="jumbotron prime">
                </div>
                <div class=" panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>
                    <form action="prime%20details.php">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">Hotel Anmol place</div>
                <div class="jumbotron anmol">
                </div>
                <div class=" panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>
                    <form action="">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">pizza hunt</div>
                <div class="jumbotron pizza">
                </div>
                <div class=" panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>

                    <form action="rangoli%20details.php">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel panel-heading">hotel Modest</div>
                <div class="jumbotron modest">
                </div>
                <div class=" panel-body">
                    <div class="rating">
                        <input type="radio" name="star" id="star1"><label for="star1">
                        </label>
                        <input type="radio" name="star" id="star2"><label for="star2">
                        </label>
                        <input type="radio" name="star" id="star3"><label for="star3">
                        </label>
                        <input type="radio" name="star" id="star4"><label for="star4">
                        </label>
                        <input type="radio" name="star" id="star5"><label for="star5">
                        </label>
                    </div>
                    <form action="rangoli details.html">
                        <button type="submit" class="btn btn-success uyt">rating</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron iop">

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
            <div class="col-md-12">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
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