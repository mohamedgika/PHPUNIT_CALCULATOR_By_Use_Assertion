<?php

use PHPUnit\Framework\TestCase;
require "calculator.php";

class calculatorTest extends TestCase
{

    // public function test_equal_true()
    // {
    //     $this->assertTrue(true);
    // }

    public function test_add_calc()
    {
        $c = new calculator();
        $this->assertEquals( $c->add(1,1) , 2);  // Test Function And Put Suggest Number
    }

    
    public function test_sub_calc()
    {
        $c = new calculator();
        $this->assertEquals( $c->sub(3,2) , 1);  
    }

    
    public function test_multi_calc()
    {
        $c = new calculator();
        $this->assertEquals( $c->multi(5,5) , 25);
    }

    
    public function test_div_calc()
    {
        $c = new calculator();
        $this->assertEquals( $c->div(10,2) , 5);     
    }


    public function test_modelus_calc(){
        $c = new calculator();
        $this->assertEquals($c->modelus(10,2),0);
    }
}









?>