<?php

include 'dbConnect.php';
$id = $_REQUEST["id"];
$count = 0;

$sqlread = "SELECT * from users";
$result = $link->query($sqlread);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($id == $row["uid"]){
            $count = $row["count"];
            break;
        }
    }
} 

if($count == 1) {
    $sqldel = "DELETE FROM users WHERE uid=$id ";

    if ($link->query($sqldel) === TRUE) {
        echo 'success';
    } else {
        echo "Error: " . $sqldel . "<br>" . $link->error;
    }
    
} else {
    $count-=1;
    $sqlupdate = "UPDATE users SET count=$count WHERE uid=$id ";

    if ($link->query($sqlupdate) === TRUE) {
        echo 'success';
    } else {
        echo "Error: " . $sqlupdate . "<br>" . $link->error;
    }
}

?>