<?php

use Illuminate\Support\Facades\Auth;

if( !function_exists("jumble")){
    
    function jumble($string, $n) {

        // get number only fron variable n
        $number = preg_replace("/[^0-9]/", "", $n);
        // get only alphanumeric and space 
        $str = preg_replace("/[^a-z0-9\s]/", "", $string);
        // avaliable letters index
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    
        $result = "";
    
        // if shift number is in range
        if ($number > 0 && $number < 1001) {
            
            // loop through all letters from the string
            for ($i = 0; $i < strlen($str); $i++) {
                
                // current letter
                $char = $str[$i];
                
                $transformedChar = "";
    
                // if chat is letter
                if (preg_match('/[a-zA-Z]/', $char)) {
                    
                    $lowercaseChar = strtolower( $char );
                    // index from the avaliable letter index
                    $charIndex = strpos( $alphabet, $lowercaseChar );
                    // Wrap around to the beginning of the alphabet if needed
                    $newIndex = ($charIndex + $number) % 26; 
                    // new letter after shift
                    $transformedChar = $alphabet[$newIndex];
    
                    // Preserve the original case
                    $transformedChar = ( $char === $lowercaseChar ? strtolower( $transformedChar ) : strtoupper( $transformedChar ) );
                
                // else if char it number or space
                } else if (preg_match('/[0-9\s]/', $char)) {
                    
                    $transformedChar = $char;
                }
    
                $result .= $transformedChar;
            }
    
            return $result;
        } else {
    
            return $str;
        }
    }
}