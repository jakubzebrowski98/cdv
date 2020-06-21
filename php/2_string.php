<?php
    $text =<<<text
    CDV
    - Collegium
    DA
    VINCI <br> 
text;

    echo $text;
    echo nl2br ($text);
    echo strtolower($text);
    echo ucfirst(strtolower($text));

    $text1 = strtolower($text);
    $text1 = ucfirst(strtoupper($text1));
    echo $text1;

    $lorem="Lorem, ipsum dolor sit amet consectetur adipisicing elit. In consequatur hic, reiciendis architecto debitis, possimus quibusdam quis quas fuga distinctio nostrum? Voluptate minima possimus accusantium quod harum pariatur architecto. Vitae?";
    echo $lorem,"<br>";

    $col = wordwrap($lorem,40,"<br>");
    echo $col;

    //usowanie bilych zankow
    $name = " Janusz  ";
    echo strlen($name)."<br>";
    echo strlen(ltrim($name))."<br>";

    //przeszukiwanie

    $address = "Poznan, il. Polna 10, tel(223 453 123)";
    $find = stristr($address,'tel');
    echo $find,"<br>";

    //przetwaranie

    $login = "bączek";
    $cenzura = array("ą","ę","ś","ź","ż","ć","ó","ń","ł");
    $zamien = array("a","e","s","z","z","c","o","n","l");
    $validlogin = str_replace($cenzura,$zamien,$login);
    echo "oto login :$login<br>";
    echo "oto login :$validlogin <br>";

    


?>