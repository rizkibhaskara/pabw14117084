<!DOCTYPE html>
<html>
  <title>Contoh Skrip PHP</title>

<body>



<?php
  $a = 5;
  switch($a) {
    case 0:
      echo "$a sama dengan 0";
      break;
    case 1:
      echo "$a sama dengan 1";
      break;
    case 2:
      echo "$a sama dengan 2";
      break;
    default:
      echo "Ga tidak sama dengan 0,1, atau 2";
  }
  ?>

</body>
</html>