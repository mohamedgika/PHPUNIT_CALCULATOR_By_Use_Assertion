<?php

use PHPUnit\Framework\TestCase;
require "calculator.php";

class calculatorTest extends TestCase
{

    // public function test_equal_true()
    // {
    //     $this->assertTrue(true);
    // }

    private $test;

    protected function test(){
        $this->test = new calculator();
    }

    public function test_add_calc()
    {
        $this->assertEquals( $this->test->add(1,1) , 2);  // Test Function And Put Suggest Number
    }

    
    public function test_sub_calc()
    {
        $this->assertEquals( $this->test->sub(3,2) , 1);  
    }

    
    public function test_multi_calc()
    {
        $this->assertEquals( $this->test->multi(5,5) , 25);
    }

    
    public function test_div_calc()
    {
        $this->assertEquals( $this->test->div(10,2) , 5);     
    }


    public function test_modelus_calc(){
        
        $this->assertEquals($this->test->modelus(10,2),0);
    }
}

?>