<?php
	include "../dbConnect.php";
	include "../mySQL.php";

	$asin = "B01LTHMF3M";
	$title = "The Magnificent Seven [Blu-ray]";
	$price = 10.98;

	$fname1 = "Bruce";
	$lname1 = "Willis";

      $fname2 = "Sebastian";
      $lname2 = "Koch";

//    $fname1 = "Ethan";
//    $lname1 = "Hawke";
//
//    $fname2 = "Halen";
//    $lname2 = "Bennett";
//
//    $fname1 = "Ethan";
//    $lname1 = "Hawke";
//
//    $fname2 = "Halen";
//    $lname2 = "Bennett";



    $actor1 = 1;
    $actor2 = 2;

	$myDB = fConnectToDatabase();
    //    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    //	$sql->bindParam(":asin", $asin);
    //    $sql->bindParam(":name", $title);
    //    $sql->bindParam(":title", $price);
    //	$sql->execute();




    fListFromDatabase($myDB);

    fInsertToDatabase($myDB, $asin, $title, $price, $fname1, $lname1, $fname2, $lname2);

    fDeleteFromDatabase($myDB, $asin, $actor1, $actor2);

	//print_r($myDB);

//	echo'<DOCTYPE html>
//	<html>
//	<head>
//	</head>
//	<body>
//	<p> NOT IMPLEMENTED </p>
//	</body>
//	</html>';
