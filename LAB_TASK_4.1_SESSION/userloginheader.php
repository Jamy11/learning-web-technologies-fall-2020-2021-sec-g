<?php
    session_start();
    if(!isset($_SESSION['active']))
    {
        header('location: public.html');
    }


?>



<table width='100%'>
    <tr >
        <td>
            <img src="logo.png" alt="">
        </td>
        <td align="right">
            Logged in as 
            <a href="profile_dash.php"><?php 
            
            echo $_SESSION['name']; 
            ?></a>
            | <a href="logout.php">Log-Out</a>|
        </td>
    </tr>
</table>