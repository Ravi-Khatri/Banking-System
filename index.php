<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <title>Sparks Baking System</title>
</head>

<body> 
    <?php
    include 'nav.php';
    ?>
    <div class="container">
    
        <form action="create_user.php" method="POST">
        <input type="submit" class="btn btn-success" value="Create User">
        </form>

        <form action="transformoney.php"  method="POST">
            <button type="submit" class="btn btn-primary">Transfor Money</button>
        </form>

        <form action="transactionhistory.php"  method="POST">
            <button type="submit" class="btn btn-primary">View Transaction Records</button>
        </form>
    </div>
</body> 
</html>