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

if($count==0){
    $sqlinsert = "INSERT INTO users (uid, count)
    VALUES ($id, 1)";

    if ($link->query($sqlinsert) === TRUE) {
        include 'offers.php';
    } else {
        echo "Error: " . $sqlinsert . "<br>" . $link->error;
    }
} else {
    $count+=1;
    $sqlupdate = "UPDATE users SET count=$count WHERE uid=$id ";

    if ($link->query($sqlupdate) === TRUE) {
        include 'offers.php';
    } else {
        echo "Error: " . $sqlupdate . "<br>" . $link->error;
    }
}

?>