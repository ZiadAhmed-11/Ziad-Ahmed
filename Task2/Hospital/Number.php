<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body
        {
            background-image: url('hospital.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100em;
            background-attachment: fixed;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <br>
  <h1 class="text-center mb-3 text-secondary" style="font-size:85px; ">H O S P I T A L</h1>
  <div class="container  d-flex col-5 justify-content-center mt-5" >
    <form method="post"  action="Review.php">

    <div >
    <label for="exampleInputEmail1" class="form-label h3 text-dark ">Your phone number </label>
    <input type="number" name="phone[]" class="form-control " id="" >
    <input type="submit" name="submit" value="Submit" class="btn btn-light  mt-5" >
  </div></form></div>
  <?php
  session_start();if(isset($_POST['submit'])){
  $_SESSION['phone'[0]]=$_POST['phone'[0]];
  header('location:Review.php');
  }
  session_destroy();

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>