<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    p{
      text-decoration: underline;
    }
    </style>
    <title></title>
  </head>
  <body>
    <p>Dane kontaktowe</p>
    <?php
    include 'katalog/name.php';
    include 'katalog/surname.php';
    echo "Imię: $name", '<br>';
    echo "Nazwisko: $surname", '<br>';
    echo '<hr';
    ?>
  </body>
</html>
