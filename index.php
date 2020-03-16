<?php 
    $username = 'Moseti';
    // string shuffle
    $newUser = str_shuffle($username);
    echo $newUser ."<br>";
    // returns the length of the string
    $length_name = strlen($username);
    echo $length_name . "<br>";
    // returns  a letter at the specified index
    echo $username[2]. "<br>";
    // echo $username[10]. "<br>";
    echo strtoupper($username)."<br>";
    $name = "<p>user</p>";
    echo htmlentities($name);
?>