<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/1_table.css">
    <title>Shop - user</title>
</head>
<body>
    <h3>Tabela user</h3>
    
    <?php
        require_once './scripts/connect.php';
        require_once './scripts/function.php';
       // include './scripts/connect.php';

       $sql = "SELECT * FROM `user` ";
       
        echo <<<TABLE
        <table>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Rok urodzenia</th>
            <th>Miasto</th>
            
        </tr>

TABLE;
       if ($result = mysqli_query($conn, $sql)) {
        
        while($row = mysqli_fetch_assoc($result)){

            $year = year($row['birthday']);
            if ($year == 0000) {
                $year = '-';
            }
        echo <<<ROW
        <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td>$year</td>
        <td>$row[city_id]</td>
        <td><a href=".scripts/del_user.php?id=$row[id]">Usuń</a></td>
        </tr>
ROW;

       }
       echo '</table>';
      // mysqli_close($conn);
    }
    ?>
    
    <?php
    if (isset($_GET['add_user'])) {
        echo "<h3>Dodawanie użyktownika</h3>";
        ?>
        <form action="add_user.php" method="post">
        <input type="text" name="name" placeholder="Imię"><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br>
        <input type="date" name="birthday">Data Urodzenia"><br>
        <select name="city_id">
      <?php
      //  require_once './scripts/connect.php';
        $sql = "SELECT * FROM city";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['city_id'];
            echo "<option value=\"$id\">$id</option>";
        }
      ?>
    </select><br>
        <input type="submit" name="button" value="Dodaj Użytkownika"><br>

        </form>
        <?php
    }else{
        echo <<<H
        <h3>
    <a href="?add_user=">Dodaj użytkownika</a>
        </h3>
H;
    }
    ?>
    

    <h3>Koniec pliku</h3>
</body>
</html>