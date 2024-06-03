<?
interface Status{
    const GETTING_READY = "Getting Ready";
    const DELIVERING    = "Delivering";
    const DONE          = "Done";

    public function getStatusName();

    public function showCancelButton();

    public function showPayButton();
}