<?php
// class TaskTest extends PHPUnit_Framework_TestCase
use PHPUnit\Framework\TestCase;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlaneTest
 *
 * @author Lancelei
 */
class PlaneTest extends TestCase {
    
    private $CI;

    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    /**
     * Test all the plane data.
     * Make sure it is the right kind and under the budget.
     * 
     */
    public function testPlane() {
        $this->CI->load->model('plane');
        
        $data = (new FleetInfo())->all();
        $this->CI->plane->budget = 10000;
        $this->CI->plane->planes = $data;
        
        var_dump($data);

        $this->assertEquals(600, $this->CI->plane->budget);
        $this->assertCount(3, $this->CI->plane->planes);
        
        
    }
    
}
