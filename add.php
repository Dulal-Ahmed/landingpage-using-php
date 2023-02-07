
 <?php
   require_once 'dbconfig.php';
	if(isset($_POST['save'])){
		//include our connection
      
        $file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
 
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$image = time().'.'.$ext;
		$ext_allowed = array("png", "gif", "jpeg", "jpg");
		$location = "uploads/".$image;
		
		//insert query
        if(in_array($ext, $ext_allowed)){
        if(move_uploaded_file($file_temp, $location)){
		$dataadd = "INSERT INTO products (imageName, location, productname , productlink , quantite , price , size, color )VALUES ('$image','$location','".$_POST['productname']."','".$_POST['productlink']."','".$_POST['quantite']."','".$_POST['price']."','".$_POST['size']."','".$_POST['color']."')";
        $db->exec($dataadd);
    
		

        echo "<script>window.location='index.php'</script>";
    }
}else{
    echo "<script>window.location='index.php'</script>";
}
	}
?>