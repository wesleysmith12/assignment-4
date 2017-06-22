<?php
// database functions ************************************************

//include "dbConnect.php";

function fInsertToDatabase($myDB, $asin, $title, $price, $fname1, $lname1, $fname2, $lname2){

    $image = 'http://images.amazon.com/images/P/'. $asin .'.01.MZZZZZZZ.jpg';

    $sql = $myDB->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)");
    $sql->execute();

    $sql = $myDB->prepare("INSERT INTO dvdActors (fname, lname) VALUES ('$fname1', '$lname1')");
    $sql->execute();

    $sql = $myDB->prepare("INSERT INTO dvdActors (fname, lname) VALUES ('$fname2', '$lname2')");
    $sql->execute();

    echo'<img src='.$image.'>';
}

function fDeleteFromDatabase($myDB, $deleteID, $actor1, $actor2) {
    //$sql = "DELETE FROM dvdtitles WHERE price=$deleteID";
    // TODO: Fill in the rest of the fuction

    $sql = $myDB->prepare("DELETE FROM dvdtitles WHERE asin=:id");
    $sql->bindValue(':id', $deleteID, PDO::PARAM_STR);
    $sql->execute();

    $sql = $myDB->prepare("DELETE FROM dvdActors WHERE actorID=:id");
    $sql->bindValue(':id', $actor1, PDO::PARAM_STR);
    $sql->execute();

    $sql = $myDB->prepare("DELETE FROM dvdActors WHERE actorID=:id");
    $sql->bindValue(':id', $actor2, PDO::PARAM_STR);
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

    $sql = $myDB->prepare("SELECT * FROM dvdActors");
    $sql->execute();
    while($row = $sql->fetch()){
        print_r($row);
        //echo '<img src='.$image.'>';
    }
}

?>
