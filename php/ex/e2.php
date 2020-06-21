<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formularze</title>
</head>
<body>
    <form method= "post">
        <input type="text" name= "poprawne" id="poprawne" placeholder="poprawne"><br>
        <input type="submit" name="button" value="Wyślij"><br>
    </form>

    <?php
    $censure = array("bialy","czarny");
    $replace = "$#%$%";
    if(!empty($_POST['login'])){
        $validlogin = str_ireplace($censure,$replace,$_POST['login']);
        echo <<<E
        dane przed: $_POST[login]<br>
        dane po: $validlogin<br>;
    }
E;}

    ?>
</body>
</html>