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
                    <a class="nav-link" href="#">Voir plus</a>
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
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="left-block">

               <form method="POST" action="add.php" enctype="multipart/form-data">  
               <div class="top" onclick="clickshowform()">
                        <div>
                            <input type="checkbox" id="check">&nbsp;
                            <label for="check">Tout sélectionner</label>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <!--  Add button  -->
                            <button type="button" class="btn add-btn addBox" onclick="addBoxes()"><img src="images/add.png" alt="">&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value="Ajouter un produit" style="outline: none; border: none; background: transparent; color: white;"></button>&nbsp;
                          
                            <img id="selectbincolor"  src="./images/bin.png" alt="deletebin"  style="width: 28px; height: 28px; cursor: pointer;" type="submit" name="delete" onclick=" deleteDta();"> 
                            <img id="selectbincolor2" src="images/bag.png" alt="bin" style="width: 20px; height: 20px;">
                      
                                                       
                        </div>
                    </div>
                    <!--top input  Box -->
                    <div id="clickopen"  class="box" style="display:none;" >
                   
                        <div class="image">
                          
                            <div class="img-box imageparentDiv">
                            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile123(event)" style="display: none;"></p>
                              <label for="file" style="cursor: pointer; width:100%; height:100%;  " ></label>
                           <p style="width:20px; height:20px; position:absolute; "><img src="./images/img-icon.png" id="output" style="width:100%;" /></p>   
                
                            </div>
                        </div>
                        <div class="description">
                            <div class="d-1">
                                <div>
                                    <!--  Prodduct link  -->
                                   <input type="text" name="productlink" placeholder="Product Link" style="border:1px solid gray; border-radius: 20px; padding:2px 8px; font-weight: 500;" required>
                                </div>
                                <div>
                                    <!-- <a href="">Edit</a> -->
                                </div>
                            </div>

                            <h5><input type="text" name="productname" placeholder=" Product Name" style="border:1px solid gray; margin-top: 10px; border-radius: 20px; padding:2px 8px; font-weight: 500;" required></h5>

                            <div class="points">
                                <div>
                                    <p class="pp-1">Quantité <br><input type="number" name="quantite" placeholder="-" style="border:1px solid gray; width: 80px; border-radius: 20px; padding:2px 8px;" required></p>
                                </div>
                                <div>
                                    <p class="pp-1">Prix <br> <input type="number" name="price" placeholder="-" style="border:1px solid gray; width: 80px; border-radius: 20px; padding:2px 8px;"></p>
                                </div>
                                <div>
                                    <p class="pp-1">Size <br><input type="text" name="size" placeholder="-" style="border:1px solid gray; width: 80px; border-radius: 20px; padding:2px 8px;"></p>
                                </div>
                                <div>
                                    <p class="pp-1">Color <br> <input type="text" name="color" placeholder="-" style="border:1px solid gray; width: 80px; border-radius: 20px; padding:2px 8px;"></p>
                                </div>
                            </div>
                        </div>
                  
                  
                    </div>

                    
                </form>

                <form id="sumitdata"   action="remove.php" method="post">
            
                <div style=" display: flex;
    flex-direction: column-reverse;">
         <?php
                //include our connection
                include 'dbconfig.php';
     
                //query from the table that we create
                $sql = "SELECT rowid, * FROM products";
                $query = $db->query($sql);
      
                while($row = $query->fetchArray()){
               echo "
                  
                    <div class='box'>
                        <div class='image'>
                           <input type='checkbox' name='chk[]' value='".$row['rowid']."' class='check-2'>
                           <a href='imgupdate.php?id=".$row['rowid']."'>
                            <div class='img-box imageparentDiv'>
                                <img class='imageLinkupdate' src='".$row['location']."' alt='productimage' >
                            </div>
                            </a>
                        </div>
                        <div class='description'>
                            <div class='d-1'>
                                <div>
                                    <img src='".$row['productlink']."' alt='dfgdfg' style='width: 15%;'>
                                </div>
                                <div>
                                 <a href='edit.php?id=".$row['rowid']."'>Edit</a>
                                </div>
                            </div>

                            <h5>".$row['productname']."</h5>

                            <div class='points'>
                                <div>
                                    <p class='pp-1'>Quantité <br/> <span class='pp-2'>".$row['quantite']."</span></p>
                                </div>
                                <div>
                                    <p class='pp-1'>Prix <br> <span class='pp-2'>".$row['price']."€</span></p>
                                </div>
                                <div>
                                    <p class='pp-1'>Size <br> <span class='pp-2'>".$row['size']."</span></p>
                                </div>
                                <div>
                                    <p class='pp-1'>Color <br> <span class='pp-2'>".$row['color']."</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
             <!-- Box 1 End -->
             </div>
             </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="right-block">
                    <h5>Mon panier</h5>
                    <ul class="mt-5">
                        <li>Articles   x2</li>
                        <li>69,12€</li>
                    </ul>
                    <ul>
                        <li>Expédition</li>
                        <li>--</li>
                    </ul>
                    <ul>
                        <li>Extras</li>
                        <li>--</li>
                    </ul>

                    <div class="buttonIn">
                        <input type="text" class="form-control" placeholder="J’ai un code promo!">
                        <button type="button" id="clear">Valider</button>
                    </div>

                    <hr style="color: #F6F6F6;">

                    <ul>
                        <li>Total</li>
                        <li>69,12€</li>
                    </ul>

                    <div class="disclaimer-box">
                        <h6>Dernière vérification :</h6>
                        <p>Les tailles et couleurs de vos articles sont-elles exactes ?
                            <br>
                            Le prix de votre article est-il juste ?
                            <br>
                            <br>
                            Sinon, veuillez <a href="">modifier vos articles</a>
                            <br>
                            <br>
                            <span>Que se passe-t-il si je me trompe sur le prix d’un article ?</span>
                        </p>
                    </div>
                </div>

                <a href="" class="btn r-btn" role="button">PASSER A L’ETAPE SUIVANTE</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card">
                      <img src="images/49.png" class="img-fluid" alt="">
                      <h5>Retours gratuits</h5>
                      <p>Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Laborum magna nulla duis ullamco cillum dolor.
                      </p>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card c-2">
                    <img src="images/33.png" class="img-fluid" alt="">
                    <h5>La garantie</h5>
                    <p>Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Laborum magna nulla duis ullamco cillum dolor.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card c-2">
                    <img src="images/20.svg" class="img-fluid" alt="">
                    <h5>La livraison</h5>
                    <p>Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Laborum magna nulla duis ullamco cillum dolor.
                    </p>
                </div>
            </div>
        </div>

    </div>
</main>
<script>
var loadFile123 = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

  <script src="./script.js"></script>
</body>
</html>