<?php
    echo "CDDDV<br>"; 
    echo "CDDV<br>"; 

    $name = 'Janusz';
    echo "<br>mam na imie : .$name";
    echo "<br>mam na imie : ,$name";

    $dec = 100;


    //skaldnia heredoc
    $name = "anna";
    $nazwisko = "nowak";
    

    echo <<< ETYKIETA
    <br>DDane użytkownika</br>
    Imie: $name<br>
    nazwisko: $nazwisko<br>
ETYKIETA;

    $data =<<< SHOW
    New data<br>
SHOW;

echo $data;


?>