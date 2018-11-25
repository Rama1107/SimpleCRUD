<h1>EDIT</h1>
<form methhod="post"> 
<input type="submit" value="<-Back" name="back"/><br />
input a new product name:<br />
<input name="new" type="text" /><br />
input id new product:<br />
<input name="id" type="text" /><br />
<input type="submit" value="Save" name="save"/>
</form>
<?php
session_start();
if (!$_SESSION['auth']){
     header("Location: http://localhost/mng/products/auth.php");
    }
?>

<?php
$db= mysqli_connect ('127.0.0.1', 'root', '', 'adminka');
 mysqli_select_db ($db, 'root');
$i=0;
if (isset($_GET['back'])){
header("Location: http://localhost/mng/products/listing.php");}

if (isset($_GET['save']))
{
    if(!$_GET['new'] or !$_GET['id']) 
        {
        echo "Please input product name. You are not";
        }
    else {          
            $prod=$_GET['new']; 
            $id=$_GET['id'];
            $SQL= "INSERT INTO 
         .   `products` 
             SET
             `name`=$prod,
             `id`=$id";
             $RESULT= mysqli_query($db, $SQL);
             echo mysqli_error($db);
             mysqli_close($db);
             print('changed succesfully saved');
        }
}
?>