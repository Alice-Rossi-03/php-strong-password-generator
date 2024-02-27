<?php

// function to get random characters
function getRanPsw($psw_length ){
        
    $psw=''; 

    for($i = 0; $i < $psw_length; $i++){

        $cycle = rand(0,3);

        if($cycle == 0){
            $psw .= chr(rand( 65, 90)) ; 
        } elseif($cycle == 1){
            $psw .= lcfirst(chr(rand(65, 90))) ; 
        } else if($cycle == 2){
            $psw .= chr(rand( 33, 47)) ; 
        } else{
            $psw .= rand( 0, 9) ; 
        };

    }
    return $psw; 
};

?>