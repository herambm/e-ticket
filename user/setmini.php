<?php session_start();
echo "<br>".$_SESSION['user'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> ETICKETING</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <center><h1>USER</h1></center>

<br>
<fieldset style="width:80%"><legend><b>Main</b></legend>
<ul type="square">

    <li><a href="../ticket/ticket.php" target="main2">Ticket Booking</a></li>

    <li><a href="../login/password_user.php" target="main2">Change password</a></li>
    

</ul>
</fieldset>
<br/>
        
        <a href="../login/logout.php" target=_top> Logout</a>
    </body>
</html>
