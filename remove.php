
<?php
	//include our connection
	include 'dbconfig.php';
 
	//delete the row of selected id
	$sql = "DELETE FROM products WHERE rowid = '".$_GET['id']."'";
	$db->query($sql);
 
    echo "<script>window.location='index.php'</script>";
	
?>