<?php
	include "../dbConnect.php";
	include "../mySQL.php";
	
	$name = "Kilroy";

	$myDB = fConnectToDatabase();
    //    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    //	$sql->bindParam(":asin", $asin);
    //    $sql->bindParam(":name", $title);
    //    $sql->bindParam(":title", $price);
    //	$sql->execute();




    fListFromDatabase($myDB);

	//print_r($myDB);

//	echo'<DOCTYPE html>
//	<html>
//	<head>
//	</head>
//	<body>
//	<p> NOT IMPLEMENTED </p>
//	</body>
//	</html>';
