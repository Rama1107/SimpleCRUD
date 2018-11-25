CATALOG
<form methhod="post">
     <br />
<input type="submit" value="<-Back" name="back"/><br />
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

 $query= mysqli_query($db, "SELECT * FROM products");
 echo mysqli_error($db);
 $products=array();
 if ($query) {
     while ($row = mysqli_fetch_assoc($query)){
         $products[]=$row;
 }}
 
 mysqli_close($db);
 foreach($products as $product):
     print("<br/>");
     print($product['name']);
     print("\t");print("\t");
     print($product['id']);
     print("<br/>");
 endforeach;
 
?>

