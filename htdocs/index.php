<?php
	include "../dbConnect.php";
	include "../mySQL.php";

//	$asin = "B01LTHMF3M";
//	$title = "The Magnificent Seven [Blu-ray]";
//	$price = 10.98;

	$asin = "B01LTHMF3M";
	$actorID = 25;

	//die hard
//	$fname1 = "Bruce";
//	$lname1 = "Willis";
//
//    $fname2 = "Sebastian";
//    $lname2 = "Koch";


//The Magnificent Seven
//    $fname1 = "Yul";
//    $lname1 = "Brynner";
//
//    $fname2 = " Steve";
//    $lname2 = "McQueen";

//incredibles
//    $fname1 = "Craig";
//    $lname1 = "Nelson";
//
//    $fname2 = "Samuel";
//    $lname2 = "Jackson";

//Beginnings Trilogy
    $fname1 = "James";
    $lname1 = "McAvoy";

    $fname2 = "Michael";
    $lname2 = "Fassbender";


    $actor1 = 1;
    $actor2 = 2;

	$myDB = fConnectToDatabase();
    //    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    //	$sql->bindParam(":asin", $asin);
    //    $sql->bindParam(":name", $title);
    //    $sql->bindParam(":title", $price);
    //	$sql->execute();

    //fInsertToDatabase($myDB, $asin, $actorID);

    fListFromDatabase($myDB);

    //fDeleteFromDatabase($myDB, $asin, $actorID);

	//print_r($myDB);

//	echo'<DOCTYPE html>
//	<html>
//	<head>
//	</head>
//	<body>
//	<p> NOT IMPLEMENTED </p>
//	</body>
//	</html>';
