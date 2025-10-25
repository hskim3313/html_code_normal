<!DOCTYPE html>
 <html>
    <head></head>
    <body>
        <p>
            <?php
            session_start();
            $test = null;
            $prevPage = $_SERVER['HTTP_REFERER'];
            if($_POST["id"] == "admin" && $_POST["password"] == "1234")
            {
                /*
                echo "id : " ;
                echo $_POST["id"];
                echo "<br>";
                
                echo "password : " ;
                echo $_POST["password"];
                echo "<br>";
                */
                $test = "login success";
            }
            
            /*if($_POST["id"] != "admin" && $_POST["password"] != "1234" && isset($_POST["login"]))*/
            else
            {
                $test = "login failed";
            }
            $_SESSION['test'] = $test;
            header('location:'.$prevPage);
            ?>
        </p>
    </body>
 </html>
