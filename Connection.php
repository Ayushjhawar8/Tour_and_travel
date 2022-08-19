<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="travel_data";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 if($conn->connect_errno)
 {
    die("sorry we have some problem");
 }
 else
 {
    echo "Database is connected";
 }
?>
<?php 
if(isset($_POST['save_data'])){
   $Email=$_POST['email'];
   $Password=$_POST['password'];
$query="INSERT INTO login_data(Email,Pass) VALUES('$Email','$Password')";
$data=mysqli_query($conn,$query);
}
?>