<?
// -------------------------------------------------------------
// <Introduction>
// This is a dummy dashboard page of an EC site.
// You can know the status of the product that you ordered.
// You can get the current status from "getStatus()".
//
// <How to run this code>
// Run below in the command line.
// $ php sample.php
//
// <Requirement>
// 1. Show the value of the current status right next to the label "Status:".
// 2. Only in the GETTING_READY status, show "Cancel Button"
// 3. Only in the DONE status, show "Pay Button"
// -------------------------------------------------------------
const GETTING_READY = "Getting Ready";
const DELIVERING    = "Delivering";
const DONE          = "Done";

echo "------------------------------" . PHP_EOL;
echo PHP_EOL;

$currentStatus = getStatus();

echo "Status:" . $currentStatus;

echo PHP_EOL.PHP_EOL.PHP_EOL;

if($currentStatus===GETTING_READY){
    echo "[Cancel Button]";
}

echo PHP_EOL.PHP_EOL.PHP_EOL;

if($currentStatus===DONE){
    echo "[Pay Button]";
}

echo PHP_EOL.PHP_EOL;
echo "------------------------------" . PHP_EOL;

function getStatus(){
    $status = array(GETTING_READY, DELIVERING, DONE);
    return $status[array_rand($status, 1)];

    // return GETTING_READY;
    // return DELIVERING;
    // return DONE;
}