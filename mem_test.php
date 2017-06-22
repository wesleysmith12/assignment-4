<?php

include "Mem.php";
include "dvd_title.php";

function TestConstructor(){

    // arrange
    t0 = new DvdTitle();

    // and act
    $memP = new Mem(777);
    class Test{
        $Name;
        $id;
    }
    $t = new Test();
    // assert
    if ($memP->Count() != 1){
        die("TestConstructor Failed");
    }
}