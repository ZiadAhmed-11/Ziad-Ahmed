
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Enter 2 numbers : <br></h1>
        <form action="calc.php" method="post" class="mt-5">
        <div class="row">
        
        <input type="number" name="1st" class="form-control col-5" placeholder="1st">
        <input type="number" name="2nd" class="form-control col-5 mx-5" placeholder="2nd">
        </div>
        <div class="col-12">
        
        <h3 class="text-center mt-5">Choose the operation : </h3>
        <select name="choise" class="form-control mt-5" aria-label=".form-select-lg example">
            <option selected>none </option>
            <option value="+" >+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary mt-4 ">Submit</button>
        </div>
        </div>
    </div>
    </form>
    <?php
if($_POST)
{
    if($_POST['choise']=='+')
    {
        $message='<div class="alert alert-info" style=" display:flex ; justify-content:center; align-items:center role="alert">'.$_POST['1st']." + ".$_POST['2nd']." = ".$_POST['1st']+$_POST['2nd'].'</div>';
    }
    elseif($_POST['choise']=='-')
    {
        $message='<div class="alert alert-info" style=" display:flex ; justify-content:center; align-items:center role="alert">'.$_POST['1st']." - ".$_POST['2nd']." = ".$_POST['1st']-$_POST['2nd'].'</div>';
    }
    elseif($_POST['choise']=='*')
    {
        $message='<div class="alert alert-info" style=" display:flex ; justify-content:center; align-items:center role="alert">'.$_POST['1st']." * ".$_POST['2nd']." = ".$_POST['1st']*$_POST['2nd'].'</div>';
    }
    else
    {
        $message='<div class="alert alert-info mt-5" style=" display:flex ; justify-content:center; align-items:center role="alert">'.$_POST['1st']." / ".$_POST['2nd']." = ".$_POST['1st']/$_POST['2nd'].'</div>';
    }
    echo $message;
}
?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>