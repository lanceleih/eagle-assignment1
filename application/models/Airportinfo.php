<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-11-12
 * Time: 6:56 PM
 */

class Airportinfo extends CSV_Model
{

    //id,base,dest1,dest2,dest3
    //"eagle","YDQ","YXJ","YNH","YCQ"
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/eagleairports.csv', 'id');

    }
    public function alldestination() {
        $hold = (isset($this->_data["eagle"])) ? $this->_data["eagle"] : null;
        $method1 ='https://wacky.jlparry.com/info/airports/'.$hold->dest1;
        $response1 = file_get_contents($method1);
        $tmp1 = (object) json_decode($response1);
        $method2 ='https://wacky.jlparry.com/info/airports/'.$hold->dest2;
        $response2 = file_get_contents($method2);
        $tmp2 = (object) json_decode($response2);
        $method3 ='https://wacky.jlparry.com/info/airports/'.$hold->dest3;
        $response3 = file_get_contents($method3);
        $tmp3 = (object) json_decode($response3);
        $final = array($tmp1,$tmp2,$tmp3);
        return $final;


    }
    public function base() {
        $hold = (isset($this->_data["eagle"])) ? $this->_data["eagle"] : null;
        $method ='https://wacky.jlparry.com/info/airports/'.$hold->base;
        $response = file_get_contents($method);
        $tmp = (object) json_decode($response);
        return $tmp->airport;
    }
}