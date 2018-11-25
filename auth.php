<?php
session_start();
$db= mysqli_connect ('127.0.0.1', 'root', '', 'adminka');
mysqli_select_db ($db, 'root');

$select=@mysqli_query($db, "SELECT log, passw FROM adminka");
$row =@mysqli_fetch_row($select);
?>
<html>
<head>
 <title>Test POST Auth page from http://itist.ru</title>        
</head>
 
<h1>Adminka11</h1>
<form methhod="post">
<input type="submit" value="<-Back" name="back"/><br />
login:<br />
<input name="log" type="text" /><br />
password:<br />
<input name="passw" type="password" /><br /><br />
<input type="submit" value="Sign in" name="button"/>
</form>

<?php
if (isset($_GET['back'])){
    header("Location: http://localhost/mng/products");
}

if (isset($_GET['button']))
{
    $log=$_GET['log'];
    $passw=$_GET['passw'];
    if ( ($log===$row[0]) and ($passw===$row[1]))
    {
        $_SESSION['auth']=$log;
        #echo "Enter to admin -> <a href='admin1.php'> Admin11</ a>";
        header("Location: http://localhost/mng/products/listing.php");
    }    
    else
    {
    return exit('Not Correct');
    }
}
?>

</html>
