<?php
    //Tuka ima session_start() i se so treba za da se povrzes so bazata.
    require 'config.php';
    
//    var_dump($_SESSION);
//    exit();
    
    if (isset($_SESSION)) {
        $users_id = $_SESSION['users_id'];//Id-to na usero e staveno u sesija koa se najavuva

        $naslov = $_POST['naslov'];
        $sodrzina = $_POST['sodrzina'];
        $query1 = "INSERT INTO post (id, naslov,sodrzina, users_id) VALUES (NULL, '$naslov', '$sodrzina', '$users_id')";
        $result1 = mysql_query($query1);
                
        if ($result1) {
            echo "Successful<BR>";
            echo "<a href=pregled_post.php>View your topic</a>";
        } else {
            echo "ERROR";
        }
    }
?>



