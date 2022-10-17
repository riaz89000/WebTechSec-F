<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "" || $password == "")
{
    echo "invalid username/password";
}
else if (strlen($username)<2)
{
    echo "<h1>Username must contain at leat two character</h1>";
}
else if  (strlen($password)<8)
{
    echo "<h1> Password must not be less than eight characters</h1>";

else if  (strpos($password, '@') == false)
{
    echo "<h1>  Password must contain at least one of the special characters (@, #, $, %) </h1>";
}
echo "<h1> Valid User! </h1>" ;
 

?>