<?php

include 'connection.php';

$sqlQuery = "SELECT * FROM $table";
$result = $conn->query($sqlQuery);

echo "passed this point<br>";
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo $row["guestName"]."<br>";
        echo $row["guestName"]."<br>";
        echo $result['photograph'] ;
    }
}else{
    echo "not working";
    
}

?>