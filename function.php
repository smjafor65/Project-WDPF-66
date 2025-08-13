<?php 
function fullname(){
    $fname="Sumon";
    $lname="Niyaz";
    echo"<h1>$fname $lname</h1>";
} 

// fullname();

function callback($a="Dear"){
    echo "<h1>Hello $a!</h1>";
}

callback("");
?>