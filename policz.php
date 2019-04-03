<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Podsumowanie równania</title>
</head>
<body>
<?php
  $A = $_GET['A'];
  $B = $_GET['B'];
  $C = $_GET['C'];

  echo "A = $A, B = $B, C = $C <br>";

  //Sprawdzenie, czy jest to równanie kwadratowe
  if ($A == 0){
    //$A jest równe zero, równanie nie jest kwadratowe
    echo "To nie jest równanie kwadratowe: A = 0!";
  }
  else{
    //A jest różne od zera, równanie jest kwadratowe

    //Obliczenie delty
    $delta = $B * $B - 4 * $A * $C;

    //Jeśli delta mniejsza od zera
    if ($delta < 0){
       echo "Delta < 0 <br>";
       echo "To równanie nie ma rozwiązania w zbiorze liczb rzeczywistych!";
    }
    //Jeśli delta większa lub równa zero
    else{
       //Jeśli delta jest równa zero
       if ($delta == 0){
         //Obliczenie wyniku
         $wynik = - B / (2 * A);
         echo "Rozwiązanie: x = $wynik";

       }
       //Jeśli delta jest większa od zera
       else{
         //Obliczenie wyników
         $wynik = (- $B + sqrt($delta)) / (2 * $A);
         echo "Rozwiązanie: x1 = $wynik";
         $wynik = (- $B - sqrt($delta)) / (2 * $A);
         echo ", x2 = $wynik";
       }
    }
  }
?>
<br><a href="form12_1.php">Powrót do formularza</a>
</body>
</html>