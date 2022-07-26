<?php 
$len = 8;
//define character libraries - remove ambiguous characters like iIl|1 0oO
$sets = array();
$sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
$sets[] = 'abcdefghjkmnpqrstuvwxyz';
$sets[] = '23456789';
$sets[]  = '@#$%^&*';

$password = '';

//append a character from each set - gets first 4 characters
foreach ($sets as $set) {
    $password .= $set[array_rand(str_split($set))];
}
while(strlen($password) < $len) {
    //get a random set
    $randomSet = $sets[array_rand($sets)];
    
    //add a random char from the random set
    $password .= $randomSet[array_rand(str_split($randomSet))]; 
}
     $password;
?>