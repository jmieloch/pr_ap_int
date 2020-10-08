<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>

   

    <?php 
    if (!empty($_GET['name']) & (!empty($_GET['surname']))){
      $name=$_GET['name'];
      $surname=$_GET['surname'];
      $name = strtolower($name);
      $surname = strtolower($surname);
      $name ucfirst($name);
      $surname ucfirst($surname);
      echo "Imię i nazwisko: $name $surname<hr>";
      echo '<a href="./e_5_form.php">Powrót do formularza</a>';
      }else{
      echo <<<FORM
      <form method="get">
      Wprowadź imię:   <input type="text" name="name" autofocus><br><br>
      <br>
      Wprowadź nazwisko:
      <input type="text" name="surname" autofocus><br><br>
      <input type="submit" value="Wyślij"> <hr>
      </form>
FORM;
    }
    ?>
  </body>
</html>
