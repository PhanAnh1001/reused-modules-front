<?
include_once 'Status.php';

Class StatusDone implements Status{

    public function getStatusName(){
        return Status::DONE;
    }

    public function showCancelButton(){
        return false;
    }

    public function showPayButton(){
        return true;
    }

}