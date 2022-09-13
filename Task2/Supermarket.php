
<!doctype html>
<html lang="en">
  <head>
    <title>Supermarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    body {
    background-image: url('supermarket.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100em;
    background-attachment: fixed;
    }
</style> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
                          <!--*********************************************************************-->
  
  <body><br>
  <h1 class="text-center mb-3 fw-bolder">S U P E R M A R K E T</h1>
    <div class="container  col-5 justify-content-center mt-5" >
    <form method="post" name="form1" action="Supermarket.php">

    <div class="col">
    <label for="exampleInputEmail1" class="form-label h3 text-dark ">Your Name </label>
    <input type="text" name="name" class="form-control " id="" >
  </div>
  <div class="col mt-2 ">
    <label for="" class="form-label h5 text-dark">Your city</label>
    <input type="text" name="city" class="form-control  form-control-color" id="">
  </div>
  <div class="col-5 mt-2 mb-1" >
    <label for="" class="form-label h7 text-dark ">No. of products:</label>
    <input name="no" type="number" class="form-control  form-control-color" id="">
    <button type="submit" class="btn btn-light ml-5 pl-5 pr-5 mb-5 mt-4">ADD</button>
  </div> 
  
  <?php 
  if($_POST){
    $message="";
    if($_POST['no']){
      $p=$_POST['no'];
      $message.="<div  class=' mb-1  ml-4 ' > <div class='row mb-3' >
      <form method='post' name='form2 ' action='Supermarket.php'>";

      for($i=0;$i<$p;$i++){
  $message.='

 
          <div class="col-4 ">
            <input type="text" name="[$i]" class="form-control" placeholder="product name">
          </div>
          <div class="col-3">
            <input type="number" name="2" class="form-control" placeholder="price">
          </div>
          <div class="col-3">
            <input type="number" name="3" class="form-control" placeholder="quantity">
            </div>';
          }
          $message.="</form></div>";
          $message.="</form></div>";
        }
        
        

    $message.='<button type="submit" class="btn btn-success mb-5 mt-4">Make an order</button></div></div></div>';
    echo $message;
    
   
    
        
  }
?>
<?php

if ($_POST && $_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $name_user = $_POST['name'];
    for ($i = 0; $i < $_POST['number_of_products']; $i++) {
        $name[] = $_POST["product" . "$i" . "name"];
    }
    $total = total();
}
// total price 
function total()
{
    $products_price_after_discount = discount();
    return fees($products_price_after_discount, $_POST['city']);
}
// after discount
function discount()
{

    $products_price = 0;
    for ($i = 0; $i < $_POST['number_of_products']; $i++) {
        $products_price +=     $_POST["product" . "$i" . "quantity"] * $_POST["product" . "$i" . "price"];
    }
    if ($products_price < 1000) {
        return  $products_price - ($products_price *  (0 / 100));
    } elseif ($products_price >= 1000 && $products_price < 3000) {

        return  $products_price - ($products_price *  (10 / 100));
    } elseif ($products_price >= 3000 && $products_price < 4500) {

        return  $products_price - ($products_price *  (15 / 100));
    } elseif ($products_price) {

        return  $products_price - ($products_price *  (20 / 100));
    }
}
// after fees 
function fees($product_price_after_discount, $city)
{

    if ($city == "cairo") {

        return  $product_price_after_discount +  0;
    } elseif ($city == "giza") {

        return  $product_price_after_discount + 30;
    } elseif ($city == "alex") {

        return  $product_price_after_discount +  50;
    } elseif ($city == "others") {

        return  $product_price_after_discount + 100;
    }
} ?>
<!doctype html>
<html lang="en">



<body>

    <div class="alert alert-success container " role="alert">

    </div>

    <div class="alert alert-success container " role="alert">

        <h4 class="alert-heading">Name : </h4>
        <p> <?php echo $name ?></p>
        <h4 class="alert-heading">city : </h4>
        <p> <?php echo $_POST['city'] == "others" ? " city out of cairo , giza ,alex  " : $_POST['city'] ?></p>
        <h4 class="alert-heading">total : </h4>
        <p> <?php echo $total ?></p>
    </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>