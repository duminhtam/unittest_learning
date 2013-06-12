<?php
    /**
     * Do an regular Expression
     * @author M T <MT@google.com>
     */
//    class do_regex{
//        function _do($string = "full name: du minh tam."){
//            preg_match("#\s*name: ([0-9a-zA-Z ]+)#", $string, $result);
//            return $result[1];
//        }
//    }
    //file nam_parser.php
    abstract class do_regex{
     function _do(){}
        
    }
    class account extends do_regex{
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