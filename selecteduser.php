<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['Id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from user where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from user where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amount)<0)
    {
         echo '<script type="text/javascript">';
         echo ' alert("Oops! Negative values cannot be transferred")';  
         echo '</script>';
     }
 
 
   
     
     else if($amount > $sql1['Balance']) 
     {
         
         echo '<script type="text/javascript">';
         echo ' alert("Insufficient Balance")';
         echo '</script>';
     }
     else if($amount == 0){
 
          echo "<script type='text/javascript'>";
          echo "alert('Oops! Zero value cannot be transferred')";
          echo "</script>";
      }
     else 
     { 
        $newbalance = $sql1['Balance'] - $amount;
        $sql = "UPDATE user set Balance=$newbalance where Id=$from";
        mysqli_query($conn,$sql);
        $newbalance = $sql2['Balance'] + $amount;
        $sql = "UPDATE user set Balance=$newbalance where Id=$to";
        mysqli_query($conn,$sql);
        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];
        $sql = "INSERT INTO `transaction` (`Sender`, `Receiver`, `Balance`) VALUES ('{$sender}','{$receiver}','{$amount}')";
        $query=mysqli_query($conn,$sql);

        if($query){
            echo "<script> alert('Transaction Successful');
                            window.location='transactionhistory.php';
                </script>";
            
        }

        $newbalance= 0;
        $amount =0;
    }
     
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
     
 </head>
 <body>
     <?php
        include "nav.php";
    ?>
    
	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['Id'];
                $sql = "SELECT * FROM `user` WHERE Id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);  
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
             <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['Id'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['Id'];
                $sql = "SELECT * FROM user where Id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['Id'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >

            <input class="btn mt-3" name="submit" type="submit" id="myBtn" value="Transfor">
            </div>
        </form>
    </div>
 </body>
 </html>
 