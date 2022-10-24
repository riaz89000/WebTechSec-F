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
            echo "please login first ...";
        }
    }
?>

<html>
    <head>
        <title>Public_Home</title>
    </head>
        <body>
            <fieldset>
           <table>      
                <tr>
                    <td><img src="Pic_logo.png" width="100" height="100" alt=""></td>
                    <a href="#"><td>Home</td></a>
                    <a href="#"><td>Login</td></a>
                    <td><a href="Registration.php">Registration</a></td>
                </tr>
           </table>
           <form method="post" action="home.php" enctype="">
    
            <fieldset>
                <legend>REGISTRATION</legend>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="" value="" placeholder="Name" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="" value="" placeholder="Email" /></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="" value="" placeholder="User Name" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="" value="" placeholder="Password" /></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="" value="" placeholder="Confirm Password" /></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value=""/> Male
                            <input type="radio" name="gender" value=""/> Female
                            <input type="radio" name="gender" value=""/> Other
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="date" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" name="" value="Submit"/>
                        <input type="reset" name="" value="Reset"/>
                    </td>
                    </tr>
                </fieldset>  
        
        </body>
        
    </html>