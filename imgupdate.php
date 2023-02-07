
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zouto</title>

    <!-- Favicon -->
    <link rel="icon" href="" type="image/png" sizes="16x16">

    <!-- Bootstrap 5 CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <!-- Fontawesome - for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />

    <!-- Montserrat - Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet linking -->
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">E-Shop</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Tarif</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="">Voir plus</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link nav-link-2" href="">Ma liste D’achats
                        <img src="images/bag.png" class="basket position-relative" alt="">
                        <span class="circle position-absolute start-25 border rounded-circle">
                          <span class="num">5</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<main class="main">
    <div class="container">

        <!-- Retour Block -->
        <div class="retour">
            <a href=""><img src="images/arrow-left.png" alt="">&nbsp;Retour</a>
        </div>

        <h3 class="heading">Ma liste d’achats</h3>

        <div class="steps-div">
            <div class="active">
                <p>1. Votre panier Zouto List</p>
            </div>
            <div class="two">
                <p>2. Tarifs</p>
            </div>
            <div class="two">
                <p>3. Paiement</p>
            </div>
        </div>

        <div class="row" onclick="detectevent()" >
       

<form method="POST" enctype="multipart/form-data">  
     <!--top input  Box -->
     <div class="box">
    
         <div class="image">
             <div class="img-box imageparentDiv">
          <!--  Image upload -->
                 <input type="file" name="image" required="required" />
 
             </div>
         </div>
         <div style="display: flex; align-items: center;">
                            <!--  Add button  -->
                            <button type="button" class="btn add-btn addBox" ><img src="images/add.png" alt="">&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value=" Update " style="outline: none; border: none; background: transparent; color: white;"></button>&nbsp;
                       
                                                       
      </div>
  </div>
</form>

                
</div>
</main>


<?php
	//include our connection
	include 'dbconfig.php';
if(isset($_POST['save'])){
$file_name = $_FILES['image']['name'];
$file_temp = $_FILES['image']['tmp_name'];

$exp = explode(".", $file_name);
$ext = end($exp);
$image = time().'.'.$ext;
$ext_allowed = array("png", "gif", "jpeg", "jpg");
$location = "uploads/".$image;

	$imgSelect = "SELECT * FROM products WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($imgSelect);
    $fetch = $query->fetchArray();
	//delete the row of selected id
	if(unlink("uploads/".$fetch['imageName'])){
	//update our table
    if(in_array($ext, $ext_allowed)){
        if(move_uploaded_file($file_temp, $location)){
		$sql = "UPDATE products SET imageName = '$image', location = '$location' WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);
 
    echo "<script>window.location='index.php'</script>";
	}
}
    }
}
?>
    </body>
  </html>
                

