<?
include_once 'Status.php';

Class StatusDelivering implements Status{

    public function getStatusName(){
        return Status::DELIVERING;
    }

    public function showCancelButton(){
        return false;
    }

    public function showPayButton(){
        return false;
    }

}