<?php

$conn = mysqli_connect('localhost','root','','bank');
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

$na=$_POST['name'];
$em=$_POST['email'];
$Bal=$_POST['bal'];
$sql = "INSERT INTO user(`Name`, `Email`, `Balance`) VALUES ('{$na}','{$em}','{$Bal}')";
$run=mysqli_query($conn, $sql);
if($run==TRUE){
    header( "refresh:0;url=index.php" );
    $msg = "User Added Succesfully";
    echo "<script type='text/javascript'>alert('$msg');</script>";
} 
else{
   echo "Failed\n";
   printf("error: %s\n", mysqli_error($conn));
}

?>