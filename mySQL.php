<?php
// database functions ************************************************

//include "dbConnect.php";

function fInsertToDatabase() {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the fuction
}

function fDeleteFromDatabase() {
  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
  // TODO: Fill in the rest of the fuction
}

function fListFromDatabase($myDB) {

    $image

    $sql = $myDB->prepare("SELECT * FROM dvdtitles");
    $sql->execute();
    while($row = $sql->fetch()){
        print_r($row);
        echo '<img src='.$image.'>';
    }
}

?>
