<?php
    class do_regex{
        function _do($string = "full name: du minh tam."){
            preg_match("#\s*name: ([0-9a-zA-Z ]+)#", $string, $result);
            return $result[1];
        }
    }
?>
