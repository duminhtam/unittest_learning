<?php
include '../account.php'; //calculator class

class account_test extends PHPUnit_Framework_TestCase {
    /**
     * Check class define generall variables?
     * 
     * $this->assertClassHasAttribute ($attributeName, $className)
     * $this->assertClassHasStaticAttribute($attributeName, $className)
     */
    protected $account;
    function setUp() {
           $mock = $this->getMock('do_regex');
       $mock->expects($this->any())->method('_do')->will($this->returnValue('du minh tam'));
        $this->account = new Account($mock);
    }
            function test_class_variables(){
        //check there is class generall variable
        $this->assertClassHasAttribute('user','account');
    }
    
    function test_get_name_from_string(){
       $name =  $this->account->get_name_from_string('name: duminhtam');
       
    
       $this->assertEquals('du minh tam', $name);
    }
    
    
}
