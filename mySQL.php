<?php
// database functions ************************************************

//include "dbConnect.php";

function fInsertToDatabase($myDB, $asin, $title, $price){

    $image = 'http://images.amazon.com/images/P/'. $asin .'.01.MZZZZZZZ.jpg';

    $sql = $myDB->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)");
    $sql->execute();
    echo'<img src='.$image.'>';
}

function fDeleteFromDatabase($myDB, $deleteID) {
    //$sql = "DELETE FROM dvdtitles WHERE price=$deleteID";
    // TODO: Fill in the rest of the fuction

    $sql = $myDB->prepare("DELETE FROM dvdtitles WHERE asin=:id");
    $sql->bindValue(':id', $deleteID, PDO::PARAM_STR);
    $sql->execute();



    //$myDB->exec($sql);

}

function fListFromDatabase($myDB) {

    $sql = $myDB->prepare("SELECT * FROM dvdtitles");
    $sql->execute();
    while($row = $sql->fetch()){
        print_r($row);
        //echo '<img src='.$image.'>';
    }
}

?>
