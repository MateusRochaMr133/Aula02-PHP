<!doctype html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!----------------------- Bootstrap ----------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <?php
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
      
        if ($valor1 > $valor2) {
          echo "<h1> O valor 1 é maior que o valor 2 </h1>";
        }

        elseif ($valor1==$valor2) {
          echo "<h1> Os valores são iguais </h1>";
        }
        
        else {
          echo "<h1> O valor é diferente do valor 2";
        }

      ?>




    </div>



    <!--------------------- Bootstrap ------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>

</html>