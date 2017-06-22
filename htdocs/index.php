<?php
	include "../dbConnect.php";
	include "../mySQL.php";

	$asin = "B01LTHMF3M";
	$title = "The Magnificent Seven [Blu-ray]";
	$price = 10.98;


	$myDB = fConnectToDatabase();
    //    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    //	$sql->bindParam(":asin", $asin);
    //    $sql->bindParam(":name", $title);
    //    $sql->bindParam(":title", $price);
    //	$sql->execute();




    fListFromDatabase($myDB);

    //fInsertToDatabase($myDB, $asin, $title, $price);

    fDeleteFromDatabase($myDB, $asin);

	//print_r($myDB);

//	echo'<DOCTYPE html>
//	<html>
//	<head>
//	</head>
//	<body>
//	<p> NOT IMPLEMENTED </p>
//	</body>
//	</html>';
