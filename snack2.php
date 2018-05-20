<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = $_GET["name"];
      $mail = $_GET["mail"];
      $age = $_GET["age"];

      if (strlen($name) <= 3) {
        $message = " Error name: Too much short, must be more than three";
        echo $message;
      }
      // var_dump(is_nan($age));
      if (is_nan($age) === null) {
        $message = "Error age: Must be a number";
        echo $message;
      }

      if (strpos($mail,"@") === false ||strpos($mail,".") ===false) {
        $message = "Error mail: Must be @ and .";
        echo $message;
      }
      else {
        $message = "Accesso riuscito";
        echo $message;

      }


     ?>
  </body>
</html>
