<?php
    if (!empty($_POST['name']) && (!empty$_POST['surname']) && (!empty$_POST['birthday']) && (!empty$_POST['city_id']) ){
        require_once './connect.php';
        $sql = "";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
          
    }
?>
