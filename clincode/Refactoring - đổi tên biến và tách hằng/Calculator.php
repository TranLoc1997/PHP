 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
  <?php
  class Calculator
  {
      public function calculate($firstOperand, $secondOperand, $operator) {
          switch ($operator) {
              case '+':
                  return $firstOperand + $secondOperand;
              case '-':
                  return $firstOperand - $secondOperand;
              case '*':
                  return $firstOperand * $secondOperand;
              case '/':
                  if ($secondOperand != 0) {
                      return $firstOperand / $secondOperand;
                  } else {
                      echo("Can not divide by 0");
                      break;
                  }
              default:
                  echo ("Unsupported operation");
          }
      }
  }
  ?>  
</body>
</html>