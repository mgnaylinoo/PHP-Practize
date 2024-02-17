<?php include("./views/frontend/header.php"); 
      include("./views/frontend/navbar.php"); 
      include("./views/frontend/login.php"); 
      
        if(isset($_POST['currentauction'])){
            include("./views/frontend/allcurrentauction.php");
        }elseif(isset($_POST['register'])){
            include("./views/frontend/signup.php");
        }
        else{
            include("./views/frontend/slideshow.php");
            include("./views/frontend/gridItem.php");
        }
 
?>




<?php include("./views/frontend/footer.php");?>
