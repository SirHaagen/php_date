<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - DATE</title>
</head>

<body>
  <?php 
    $month = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
    echo "today is ". date("d"). " " . $month[date("m") - 1]. " " . date("Y") . "<br>";
    echo "Date:".date("d / m / Y");
  ?>

</body>

</html>