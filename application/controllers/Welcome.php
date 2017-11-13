<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->data['pagebody'] = 'welcome';
        $this->data['pagetitle'] = 'BirdBrain - Home';
        
        // load models needed
        $this->load->model('fleetInfo');
        $this->load->model('flightInfo');
        $this->load->model('airportinfo');

        // retrieve info from models
        $fleet = $this->fleetInfo->all();
        $flights = $this->flightInfo->all();


        // save info to data
        $this->data['fleetNum'] = count($fleet);

        $holdcount = 0;
        foreach($flights as $tasks){
            $holdcount++;
        }
        $this->data['flightsNum'] = $holdcount;
        $this->data['baseAirport'] =$this->airportinfo->base();
        $this->data['airports'] = $this->airportinfo->alldestination();

        // set default user role 
        if(isset($_SESSION['userrole']) && !empty($_SESSION['userrole'])) {
            $this->session->set_userdata('userrole', ROLE_GUEST);
        }
        
        $this->render();
    }

}
