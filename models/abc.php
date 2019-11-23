<?php

class Abc extends CI_Model {
    public function test()
    {
        echo "hello";
    }
    public function authenticate(){
        return ['abc'=>'ABC'];
    }
}