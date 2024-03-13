<?php

    require("../../controllers/catcontroller.php");
    $db = new catcontroller();
    $result = $db->getAll();
    foreach ($result as $row) {
        echo "$row[CatName] <br>";
    }

?>