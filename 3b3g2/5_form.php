<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>
    

    <?php 
    if (!empty($_GET['surname'])){
      $surname=$_GET['surname'];
      echo "Wprowadziłeś dane: $surname<hr>";
      echo '<a href="./5_form.php">Powrót do formularza</a>';
      }else{
      echo <<<FORM
      <form method="get">
        <input type="text" name="surname" autofocus><br><br>
        <input type="submit" value="Wyślij"> <hr>
        </form>
FORM;
    }
    ?>
  </body>
</html>
