<?php session_start();
echo "<br>".$_SESSION['user'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title>
         <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">
        function getsub()
        {
            var url =document.getElementById("edit").value;
            top.frames['main'].location.href=url;
        }
        </script>
    </head>
    <body>
    <center><h1>Administrator</h1></center>
<fieldset style="width:80%"><legend><b>Update</b></legend>
    <select name="EDIT" onchange="getsub()" id="edit"  ><option value="../setup/setmain.php">Select</option>
        
       
        <option value="../company/companyupdate.php">Company </option>
       
        
        <option value="../price/priceupdate.php">Ticket Price </option>
      
        <option value="../login/create_userupdate.php">User Edit</option>
    </select>

</fieldset>
    <br>
<fieldset style="width:80%"><legend><b>Main</b></legend>
    <ul type="square">
    <li>Setup<ul>
    <li><a href="../company/company.php" target="main">Company</a></li>
    <li><a href="../price/price.php" target="main">Ticket Price </a></li>
   
    <li><a href="../login/create_user.php" target="main">Create User</a></li>
    <li><a href="../login/password.php" target="main">Change password</a></li>
    </ul>
    <li><a href="../ticket/ticket.php" target="main">Ticket Booking</a></li>
    
    </li>
</ul>
</fieldset>
<br>



        <?php
        // put your code here
        ?>
        <a href="../login/logout.php" target=_top> Logout</a>
    </body>
</html>