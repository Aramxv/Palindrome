<?php

/*  
    Palindrome Logic 
    --Get the reverse of the input number or string.
    --Compare both the numbers and strings - reverse the number or string. 
    --if the input and reverse are found to be same or equal, it means it is a palindrome.
*/

?>

<?php 
    // Check for Palindrome string using strrev() built-in function
    function CheckPalindrome($string){   
        if (strrev($string) == $string){   
            return 1;   
        } 
        else{ 
            return 0; 
        } 
    }  

    // Change the Input Word here!
    $inputStringHere = "MADAM";

    if (CheckPalindrome($inputStringHere)) {
        echo "<h1 style='text-align:center; color:green;'>$inputStringHere<br>This Word is a Palindrome!</h1>";
    } else {
        echo "<h1 style='text-align:center; color:red;'>$inputStringHere<br>This Word is NOT a Palindrome!</h1>";
    }

?>