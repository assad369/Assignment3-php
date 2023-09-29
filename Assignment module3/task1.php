<?php



function modifiedText($text){

    //Convert the string to all lowercase.

    $lowercaseText=(strtolower($text));

    //Replace "brown" with "red" in the string.

    $replacedText=str_replace('brown','red',$lowercaseText);

    //Print the modified text.

    echo($replacedText);

}

$text= "The quick brown fox jumps over the lazy dog";

//call function
modifiedText($text);