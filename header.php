<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="headerStyle.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  
  <h2 class="logo">Sargam</h2>
    <div>
      <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
        <a href="play.html" class="btn nav">Home</a>
        <a href="MyWishlist.php" class="btn nav">My Wishlist(<?php echo $count; ?>)</a>
    </div>
  
</nav>
</body>
</html>