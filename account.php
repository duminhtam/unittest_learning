<?php
    require 'do_regex.php';
    
//    abstract class do_regex{
//     function _do(){}
//        
//    }
    
    class account{
        protected $user;
        
        function __construct(do_regex $do_regex = null){
            $this->do_regex =  (!isset($do_regex)) ? new do_regex() : $do_regex;
            
        }
        function get_name_from_string($string){
            return $this->do_regex->_do("name: du minh tam");
        }
    }
    
//    $result = do_regex::_do();
//    var_dump($result);
 
?>