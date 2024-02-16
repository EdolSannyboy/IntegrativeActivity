<?php
include("config.php");

if(isset($_POST["registrationButton"])){

$sport = $_POST['sport'];
$address = $_POST['address'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$sponsor = $_POST['sponsor'];
// $password = $_POST['password'];

$query = "INSERT INTO `sports_tournament`(`sport`, `address`, `start_date`, `end_date`, `sponsor`) VALUES ('$sport','$address','$start_date','$end_date','$sponsor')";
$query_run = mysqli_query($con,$query);

if($query_run){
    header("index.php");
    echo"registration Success";


}else{
    echo "Error!";
}
}