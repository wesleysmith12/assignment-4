<?php
// database functions ************************************************

//include "dbConnect.php";

function fInsertToDatabase($myDB, $asin, $actorID){

    $image = 'http://images.amazon.com/images/P/'. $asin .'.01.MZZZZZZZ.jpg';

//    $sql = $myDB->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)");
//    $sql->execute();

    $sql = $myDB->prepare("INSERT INTO actor_title (asin, actorID) VALUES ('$asin', '$actorID')");
    $sql->execute();

//    $sql = $myDB->prepare("INSERT INTO dvdActors (fname, lname) VALUES ('$fname2', '$lname2')");
//    $sql->execute();

    echo'<img src='.$image.'>';
}

function fDeleteFromDatabase($myDB, $asin, $actorID) {
    //$sql = "DELETE FROM dvdtitles WHERE price=$deleteID";
    // TODO: Fill in the rest of the fuction

    $sql = $myDB->prepare("DELETE FROM actor_title WHERE asin=:asinid AND actorID=:actorid");
    $sql->bindValue(':asinid', $asin, PDO::PARAM_STR);
    $sql->bindValue(':actorid', $actorID, PDO::PARAM_INT);
    $sql->execute();

//    $sql = $myDB->prepare("DELETE FROM dvdActors WHERE actorID=:id");
//    $sql->bindValue(':id', $actor1, PDO::PARAM_STR);
//    $sql->execute();
//
//    $sql = $myDB->prepare("DELETE FROM dvdActors WHERE actorID=:id");
//    $sql->bindValue(':id', $actor2, PDO::PARAM_STR);
//    $sql->execute();



    //$myDB->exec($sql);

}

function fListFromDatabase($myDB) {

    $sql = $myDB->prepare("SELECT * FROM dvdActors INNER JOIN actor_title on dvdActors.actorID = actor_title.actorID INNER JOIN dvdtitles on actor_title.asin = dvdtitles.asin");
    $sql->execute();
    while($row = $sql->fetch()){
        print_r($row);
        //echo '<img src='.$image.'>';
    }

//    $sql = $myDB->prepare("SELECT * FROM dvdActors");
//    $sql->execute();
//    while($row = $sql->fetch()){
//        print_r($row);
//        //echo '<img src='.$image.'>';
//    }
}

?>
