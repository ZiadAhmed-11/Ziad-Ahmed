<?php
if($_POST)
{
$operation=((($_POST['physics']+$_POST['chemistry']+$_POST['biology']+$_POST['mathematics']+$_POST['computer'])/500)*100);

  if($operation>=90)
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => Grade A</div>';
    }
    else if($operation>=80)
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => Grade B</div>';
    }
    elseif($operation>=70)
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => Grade C</div>';
    }
    elseif($operation>=60)
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => D</div>';
    }
    elseif($operation>=40)
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => E</div>';
    }
    else
    {
        $message='<div class="alert alert-dark" role="alert">Percentage : '.$operation.'% => F</div>';
    }
    echo $message;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>First task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container col-6 mt-5">
  <form action="GRAD.php" method="post"  >
  <div class="form-group" >
    <label for="exampleInputEmail1">Physics</label>
    <input type="number" name="physics" class="form-control"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="phy. marks">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Chemistry</label>
    <input type="number" name="chemistry"class="form-control" id="exampleInputPassword1" placeholder="Chem. marks">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Biology</label>
    <input type="number" name="biology" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bio. marks">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mathematics</label>
    <input type="number" name="mathematics" class="form-control" id="exampleInputPassword1" placeholder="math. marks">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Computer</label>
    <input type="number" name="computer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="comp. mark">
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
  </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>