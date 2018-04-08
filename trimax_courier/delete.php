<?php
$con=mysqli_connect('localhost','root','','trimax');
if (isset($_POST['delete']))
{
    $query = "DELETE FROM trimax_adress;
    $result = mysqli_query($con, $query);
}
?>