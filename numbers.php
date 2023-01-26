<?php    $file = file_get_contents("php://input");
    file_put_contents("divided_data.txt", $file);
?>
