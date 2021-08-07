<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>TASK - 1</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
     <div class="container-fluid" style="background-image: url('https://c.tenor.com/kKmvIr30vQYAAAAj/stars-changing-colors.gif');">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Facegif.com%2Fconfetti%2F&psig=AOvVaw1FxgEI7ku3zqnIuVGqaFWx&ust=1628407093673000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCICO1qmvnvICFQAAAAAdAAAAABAr');">
                  <h3 style="color:#1F51FF;">Welcome to</h3>
                  <h1 style="color:#1F51FF;">THE SPARKS FOUNDATION BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.jpg" class="img-fluid pt-2" style="width: 400px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png"  height= "70%" width="70%">
                    <br>
                    <a href="createuser.php"><button class="btn">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button class="btn">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" height= "70%" width="70%">
                    <br>
                    <a href="transactionhistory.php"><button class="btn">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p><span style="color:#52006A;">&copy 2021. Made with </span><span style="color:#CD113B;">&hearts;</span><span style="color:#52006A;"> by <b>SHREYA LANGAR</b> <br> The Sparks Foundation</span></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>