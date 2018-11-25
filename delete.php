<form methhod="post">
     <br />
<input type="submit" value="<-Back" name="back"/><br />
Input product name to delete:<br />
<input name="del1" type="text" /><br />
<input type="submit" value="Delete" name="del2"/><br />
<form/>
<?php
session_start();
if (!$_SESSION['auth']){
     header("Location: http://localhost/mng/products/auth.php");
    }
?>

<?php
$db= mysqli_connect ('127.0.0.1', 'root', '', 'adminka');
 mysqli_select_db ($db, 'root');
if (isset($_GET['back'])){
header("Location: http://localhost/mng/products/listing.php");}

if (isset($_GET['del2'])){
    $del=$_GET['del1'];
    if(!$del) {print('Please enter product name to delete');}
    else{
    $RESULT= @mysqli_query($db, "DELETE FROM products WHERE name='$del'");
    echo mysqli_error($db);
    mysqli_close($db);
    print('changed saved');}
    }
?>
