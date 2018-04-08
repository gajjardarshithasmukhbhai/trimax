<?php
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
        .pop
        {
            background-color: #b2dba1;
        }
        .try
        {
            height: 70px;
        }
        .ytop
        {
            background-color: greenyellow;
        }
        .lol
        {
            font-size: 16px;
            font-family: DialogInput;
            color: black;
            font-weight: bolder;
        }
        .sol
        {
            text-shadow: 1px 1px gold;
            box-shadow: 1px 1px 1px 1px orange;
        }
        .popat
        {
            font-size: 18px;
            text-shadow: 2px 2px 2px 2px orangered;
        }
        .usert
        {
            color: fuchsia;
            font-size: 30px;
        }
        .iuy
        {
            color: rebeccapurple;
            font-size: 30px;
        }
        .iuy:hover
        {
            color: yellowgreen;
        }
        .yui
        {
            color: red;
            font-size: 30px;
        }
        .yui:hover
        {
            color: darkblue;
        }
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
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
            <div class="well pop">
            <form method="post">
                <h3>trimax comment please give good comment so given more better service</h3>
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                <input type="comment" class="form-control try" placeholder="comment of trimax" name="comment">
                    <br>
                    <div class="col-md-10">
              </div>
                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                    <button type="reset" class="btn btn-danger">cancel</button>
              </div>
            </form>
            </div>
         </div>

                            <div class="well ytop">
                                <?php
                                $con=mysqli_connect('localhost','root','','trimax');
                                $query="select comment from comment";
                                $esult=mysqli_query($con,$query);
                                $sum=mysqli_num_rows($esult);
                                for($i=1;$i<=$sum;$i++) {
                                    $row = mysqli_fetch_array($esult);
                                    ?>
                                    <pre class="lol"><span class="glyphicon glyphicon-user usert"></span><?php echo $row['comment']; ?><span class="glyphicon glyphicon-thumbs-up iuy wow zoomOutUp lpo"></span> <span class="glyphicon glyphicon-thumbs-down yui wow zoomOutDown"></span> </pre>
                                    <?php
                                }
 ?>
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
<?php
    $con=mysqli_connect('localhost','root','','trimax');
    if(isset($_POST['submit']))
    {
        $ytr=$_SESSION['uname'];
        $_SESSION['comment']=$_POST['comment'];
        $comment=$_SESSION['comment'];
        $query = "INSERT INTO comment(user,comment) VALUES ('$ytr','$comment')";
        $run = mysqli_query($con, $query);
    }
?>
