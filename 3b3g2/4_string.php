<?php
  $text = <<< T
    zsl - Zespół
    Szkół
    Łączności<br>
T;

  echo $text;
  echo nl2br($text);

  $name ="jAnuSZ";

  //zamiana na małe litery
  $name = strtolower($name);
  echo $name;

  //zamiana na duże litery
  $name="krYStYnA";
  $name = strtoupper($name);
  echo $name;

  //zamiana pierwszej litery na duza
  $name="aNNa NOWak";
  echo ucfirst($name); //ANNa NOWak

  //zamiana wszystkich liter na wielkie
  $name="aNNa NOWak";
  echo ucwords($name); //ANNa NOWak

  //zamien $name aby wygladala tak: Anna Nowak
$name = 'aNNa noWAk';
echo ucwords(strtolower($name));

//lorem ipsum
 $lorem =<<<LOREM
 <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

 echo $lorem;
 $col = wordwrap($lorem, 40, '<br>');
 echo $col;

 $col = wordwrap($lorem, 40, '<hr>');
 echo $col;

 //czyszczenie zawartosci bufora
  ob_clean();

  //usuwanie bialych znakow
  $name='Anna';
  $name1='   Anna  ';//9
  echo 'Długość $name: ',strlen($name);
  echo '<br>';
  echo 'Długość $name1: ',strlen($name1);
echo '<br>';
  echo strlen(ltrim($name1));
  echo '<br>';
  echo strlen(rtrim($name1));
  echo '<br>';
  echo strlen(trim($name1));//4

  echo strlen($name1);//9
  $name1 = trim($name1);
  echo strlen($name1);//4

  //przeszukiwanie ciągów znakówa

  $address = "Poznan, ul.Polna 2, tel. (61)23-45-789";
  $search = strstr($address, 'tel');
  echo "<br>$search<br>"; //telefon

  $address = "Poznan, ul.Polna 2, tel. (61)23-45-789";
  $search = strstr($address, 'tel', true);
  echo "<br>$search<br>"; //poznan ul polna

  $address = "Poznan, ul.Polna 2, tel. (61)23-45-789";
  $search = strstr($address, 'tel', true);
  echo '<br>Długość $search: ',strlen($search);//22 znaki polskie
  echo "<br>$search<br>"; //poznan ul polna

  echo strstr('zsl@gmail.com', '@'); //@gmail
  echo strstr('zsl@gmail.com', 64);
echo '<br>';
  $domain = substr(strstr('zsl@gmail.com','@'),1);
  echo $domain
?>
