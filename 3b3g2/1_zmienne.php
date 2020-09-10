<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
    $name='Janusz';
    $surname='Nowak';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    // konkatenacja .
    echo "Nazwisko: $surname".'<hr>';

    // typy danych
    // boolean
    $prawda = true;
    $fałsz = false;
    echo $prawda; //1
    echo $fałsz, '<br>'; //nic nie wyswietli

    //integer
    $bin = 0b1010; //10 binarne
    $oct = 010; //8 oktalne
    $dec = 20;
    $hex = 0xB; //11

    echo $hex, '<hr>';

    //skladnia heredoc xxx
    $name='Krystyna';
    $text = <<< ETYKIETA
    Imię: $name <br>
    Nazwisko: $surname <hr>
ETYKIETA;

    echo $text;

    echo <<< E
    Heredoc 2<br>
    Imię: $name <hr>
  E;

  //skladnia nowdoc 'xxx'
  echo <<< 'E'
  Heredoc 2<br>
  Imię: $name <hr>
  E;

  $city='Poznań';
  echo "Nazwa zmiennej: \$city,
  wartość: $city";
    ?>
  </body>
</html>
