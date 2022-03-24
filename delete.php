<?php 

require 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM people WHERE id=:id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id',$id);

if ($stmt->execute()) {

    header("Location: index.php");
    
}

?>