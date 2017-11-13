<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-10-05
 * Time: 3:42 PM
 */


class FlightInfo extends CSV_Model
{


    // Constructor
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/flightpath.csv', 'id');

    }

    // retrieve a single flight, null if not found
    public function get($which, $key2 = null)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }


    function setFrom(){
        foreach($this->_data as $tasks){
            $method1 ='https://wacky.jlparry.com/info/airports/'.$tasks->port1;
            $response1 = file_get_contents($method1);
            $tmp1 = (object) json_decode($response1);
            $tasks->from = $tmp1->airport;

        }
    }
    function setTo(){
        foreach($this->_data as $flight){
            $method2 ='https://wacky.jlparry.com/info/airports/'.$flight->port2;
            $response2 = file_get_contents($method2);
            $tmp2 = (object) json_decode($response2);
            $flight->to = $tmp2->airport;
        }
    }
    public function all()
    {

        $this->setFrom();
        $this->setTo();

        return $this->_data;
    }



}