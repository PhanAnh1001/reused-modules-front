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
include_once 'Status.php';
include_once 'StatusGettingReady.php';
include_once 'StatusDelivering.php';
include_once 'StatusDone.php';

$currentStatus;
switch( getStatus() ){
    case Status::GETTING_READY:
        $currentStatus = new StatusGettingReady();
        break;
    case Status::DELIVERING:
        $currentStatus = new StatusDelivering();
        break;
    case Status::DONE:
        $currentStatus = new StatusDone();
        break;
}

echo "------------------------------" . PHP_EOL;
echo PHP_EOL;

echo "Status:" . $currentStatus->getStatusName();

echo PHP_EOL.PHP_EOL.PHP_EOL;

if($currentStatus->showCancelButton()){
    echo "[Cancel Button]";
}
echo PHP_EOL.PHP_EOL.PHP_EOL;

if($currentStatus->showPayButton()){
    echo "[Pay Button]";
}

echo PHP_EOL.PHP_EOL;
echo "------------------------------" . PHP_EOL;

function getStatus(){
    $status = array(Status::GETTING_READY, Status::DELIVERING, Status::DONE);
    return $status[array_rand($status, 1)];

    // return GETTING_READY;
    // return DELIVERING;
    // return DONE;
}