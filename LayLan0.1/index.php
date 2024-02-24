<?php include("./views/frontend/header.php"); 
      include("./views/frontend/navbar.php"); 
      include("./views/frontend/login.php"); 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LayLan";

            try {
              $conn = new PDO("mysql:host=$servername", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sql = "CREATE DATABASE LayLan";
              $conn->exec($sql);

              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sql = "CREATE TABLE Bank(Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          Username VARCHAR(50),
                          Phone VARCHAR(50),
                          Password VARCHAR(50),
                          Payment VARCHAR(50),
                          Amount VARCHAR(50))
                        ";
                    $conn->exec($sql);

              $stmt = $conn->prepare("INSERT INTO Bank (Id, Username, Phone, Password, Payment, Amount) VALUES (:id, :username, :phone, :password, :payment, :amount)");

              $stmt->bindParam(':id', $id);
              $stmt->bindParam(':username', $username);
              $stmt->bindParam(':phone', $phone);
              $stmt->bindParam(':password', $password);
              $stmt->bindParam(':payment', $payment);
              $stmt->bindParam(':amount', $amount);

              $id = "1";
              $username = "Lin Thu";
              $phone = "09762701371";
              $password = "this is my password";
              $payment = "KBZ";
              $amount = "50000000";
              $stmt->execute();

              $id = "2";
              $username = "Khine Thinzar";
              $phone = "09762701371";
              $password = "this is my password";
              $payment = "AYA";
              $amount = "150000000";
              $stmt->execute();

              $id = "3";
              $username = "Kyaw Zayer";
              $phone = "09762701371";
              $password = "this is my password";
              $payment = "WAVE";
              $amount = "10000000";
              $stmt->execute();

              $id = "4";
              $username = "Naung Bhome";
              $phone = "09762701371";
              $password = "this is my password";
              $payment = "WAVW";
              $amount = "100000000";
              $stmt->execute();

              
              
            } catch(PDOException $e) {
              echo "Something went wrong:".$e->getMessage();
            }
      
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
