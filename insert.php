<?php
include "db.php";

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO students (name, age, status)
VALUES ('$name', '$age', 0)";

if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}
?>