<h1>LISTING</h1>
<form methhod="post">
 <input type="submit" value="<-exit" name="back"/><br />
<input type="submit" value="edit" name="edit"/>
<input type="submit" value="delete" name="delete"/>
</form>


<?php
session_start();
if (!$_SESSION['auth']){
     header("Location: http://localhost/mng/products/auth.php");
    }
?>

<?php
if (isset($_GET['back'])){
header("Location: http://localhost/mng/products/auth.php");}

if (isset($_GET['edit']))
{
    #echo "<a href='admin3.php'> To edit click here</ a>"; 
    header("Location: http://localhost/mng/products/edit.php");
}
if (isset($_GET['delete']))
{
    #echo "<a href='admin4.php'> To delete click here</ a>";
    header("Location: http://localhost/mng/products/delete.php");
}

echo "<br/><a href='catalog.php'> To CATALOG click here</ a>";
?>
