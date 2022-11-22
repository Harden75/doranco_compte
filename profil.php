<?php
require_once "inc/init.php";



if(isset($_SESSION['membre'])){
   header("location:connexion.php");
   exit; 
}

debug($_SESSION);

require_once "inc/header.php";



?>
<?php if( !empty($_SESSION['successMessage']) ){ ?>
        <div class="alert alert-success col-md-6 text-center mx-auto">
            <?php echo $_SESSION['successMessage'] ?>
        </div>
        <?php unset($_SESSION['successMessage']);
     } 
     ?>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
        <div class="card p-4"> 
            <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                <button class="btn btn-secondary"> 
                    <img src="../02_repertoire/photos/boy.png" height="100" width="100" />
                </button> 
                
                <span class="name mt-3"><?php echo $_SESSION['membre']['firstname']." ".$_SESSION['membre']['lastname'] ?> </span> 
                
                
                <span class="idd"><?= $_SESSION['membre']['username']?></span> 
                
                <div class="text mt-3 text-center"> 
                    <span>
                        <?= $_SESSION['membre']['email']?><br><?=
                        $_SESSION['membre']['status']?><br>
                    </span>
                </div>
                
                <div class=" d-flex mt-2"> 
                    <button class="btn1 btn-dark">Modifier Profil</button> 
                </div> 
            </div> 
        </div>
    </div>

    <?php
    require_once"inc/footer.php";