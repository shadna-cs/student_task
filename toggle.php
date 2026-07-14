<?php
include "db.php";

$id = $_POST['id'];

$sql = "UPDATE students
SET status = IF(status = 0, 1, 0)
WHERE id = $id";

if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}
?>