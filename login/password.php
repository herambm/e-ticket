<?php session_start();
require '../include/sqlconn.php';
$sqlselect="select * from user order by user_name";
$sqlselect3="select * from user order by user_name";
$sqlselect1="select * from role";
$sqlselect2="select * from location";
$resultsel = mysql_query($sqlselect);
$resultsel1 = mysql_query($sqlselect1);
$resultsel2 = mysql_query($sqlselect2);
$resultsel3 = mysql_query($sqlselect3);
?>
<fieldset><legend><b>ADMIN CHANGE PASSWORD</b></legend>

    <br/>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <form action="password.php" method="POST">
            <table border="0">

                    <tr>
                        <td width="100">Username</td>
                        <td width="250"><select class="textfield" name="use"><option value="">Pick user</option><?php while ($row = mysql_fetch_assoc($resultsel3)){
    extract($row); echo "<option value='$user_name'>$user_name</option>"; } ?></select></td>
                    </tr>
                     <tr>
                        <td width="100">Old Password</td>
                        <td width="250"><input class="textfield" type="password" name="pass" value="" /></td>
                    </tr>
                      
                    <tr>
                        <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit" name="submit" /></td>

                    </tr>

            </table>
            </form>

<?php
if(isset($_POST['submit'])){
     $use = trim($_POST['use']);
     $pass = trim($_POST['pass']);
$_SESSION['use']=$use;

    $sqlsearch = "select * from user where user_name = '$use' and password='$pass'";
    $results= mysql_query($sqlsearch);
  $s= mysql_num_rows($results) ;
    if  ($s == 1){

echo" <form action='passscript.php' method='POST'>";
echo"<table>";
echo"<tr><td width='100'>New Password</td><td width='250'><input class='textfield' type='text' name='pass1' value='' /></td></tr>";
echo"</table>";echo"<tr>";
echo"<td width='100'><input class='formbutton' type='submit' value='Submit' name='submit2' /></td>";
echo"</tr>";
echo"</form>";
    }}
           
          


        ?>
      </fieldset>
    </body>
</html>

