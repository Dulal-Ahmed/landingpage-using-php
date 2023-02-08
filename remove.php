
         <?php
		 	include 'dbconfig.php';
                //include our connectio          
				// if(isset($_POST['delete'])){
					//include our connection
				 $chk = $_POST['chk']; 
				 $everychecked = implode(",",$chk);
                //query from the table that we create
                $sql = "SELECT * FROM products WHERE rowid in($everychecked )";
                $query = $db->query($sql);
     
                while($row = $query->fetchArray()){
					if(unlink("uploads/".$row['imageName'])){
           	//delete the row of selected id
	             $sql = "DELETE FROM products WHERE rowid in($everychecked ) ";
                 $db->query($sql);
   

				}}
				
				echo "<script>window.location='index.php'</script>";
			// }}
			// echo "<script>window.location='index.php'</script>";
				?>