<?php 

    if(isset($_GET['err']))
    {
        if($_GET['err'] == 'null')
        {
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid')
        {
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request')
        {
            echo "Please crete an account ...";
        }
    }
?>

