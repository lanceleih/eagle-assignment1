<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controller for booking flights
 * @author Teah
 */
class Booking extends Application
{
    // render page
    public function index()
    {        
        $this->data['pagebody'] = 'booking';
        $this->data['pagetitle'] = 'BirdBrain - Booking';
                        
        $this->load->model('flightInfo');       // load the model
        
        $cities = $this->flightInfo->allCities();   //get cities to display in drop down
        $this->data['cities'] = $cities;
                      
        $this->render();        
    }      
    
    /* Work in progress */
    public function submit() {
        $this->data['from'] = $_GET["departure"];
        $this->data['to'] = $_GET["arrival"];
        redirect($_SERVER['HTTP_REFERER']);    // go back
    }
    
}
