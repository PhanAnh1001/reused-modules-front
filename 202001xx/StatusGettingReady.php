<?
include_once 'Status.php';

Class StatusGettingReady implements Status{

    public function getStatusName(){
        return Status::GETTING_READY;
    }

    public function showCancelButton(){
        return true;
    }

    public function showPayButton(){
        return false;
    }

}