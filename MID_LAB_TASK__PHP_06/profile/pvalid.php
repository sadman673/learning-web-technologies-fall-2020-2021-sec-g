<?php

            $a = $_POST['img'];

	
    if (isset($a) && !empty($a) && ($a>1)) {
       
       
            echo "Valid";
    } 
    else {
        echo "Picture cannot be empty";
    }


?>