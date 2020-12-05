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
            <div class="col">
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
                        <td><button onclick="multiplication()"   class="btn btn-info">result</Button></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><input type="text" id="res" class="formcontrol"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
        function multiplication()
        {
           var getnum1=parseInt(document.getElementById("num1").value)
           var getnum2=parseInt(document.getElementById("num2").value)
            var result=getnum1*getnum2
            document.getElementById("res").value=result
        }
    </script>
</body>
</html>