
    <h4>Dane z formularza</h4>
    <?php
    // echo '<pre>', print_r($_GET), '</pre>';

    $pass = $_GET['pass'];
    $color = $_GET['color'];
    switch ($color){
        case 'r':
            $color = 'czerwony';
        break;

        case 'g':
            $color = 'zielony';
        break;

        case 'b':
            $color = 'niebieski';
        break;
    }

    if(isset($_GET['regulamin'])){
        $reg = "Regulamin zatwierdzony";
    }else{
        $reg = "Proszę zatwierdzić regulamin"; 
    }

     echo <<<DATA
        Name: $_GET[name]<br>
        Hasło: {$_GET['pass']}<br>
        Hasło: $pass<br>
        Ulubiony kolor: $color
      