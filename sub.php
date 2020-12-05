<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">addition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sub.php">subtraction</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="multiplication.php">multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="div.php">division</a>
          </li>
          
        </ul>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">   
            </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <table class="table">
<tr>
    <td>Number1</td>
    <td><input type="text" class="formcontrol" id="num1"></td>
</tr>
<tr>
    <td>Number2</td>
    <td><input type="text" class="formcontrol" id="num2"></td>
</tr>
<tr>
    <td></td>
    <td><Button onclick="subtraction()" class="btn btn-info">Result</Button></td>
</tr>
<tr>
    <td>Result</td>
    <td><input type="text" name="res" id="res"></td>
</tr>



        </table>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        </div>
        </div>
    </div>
    <script>
        function subtraction()
        {
        var getnum1=parseInt(document.getElementById("num1").value)
        var getnum2=parseInt(document.getElementById("num2").value)
        var result=getnum1-getnum2
        
        document.getElementById("res").value=result
       
        
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>