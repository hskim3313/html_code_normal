<html>
<head>
    <title>Hello Login World</title>
</head>
<body>
    <div style="width:100vw; height: 100vh; display: flex; align-items: center;">
            <div style="border: 3px solid rgb(128, 0, 96); width:300px; height: 280px; line-height: 10px; text-align:center;  margin: 0 auto;"> 
              <h1>Login</h1>
              <br><br><br>
              
              <div style="border: 0px solid rgb(128, 0, 96); text-align:right; margin : auto 10;">
              <form action="db_post_test1.php" method="post">
                 I    D  : <input type="text" name="id" placeholder="Enter id here"  onkeyup="if(event.keyCode=='13'){<?php $test = null; ?>;}"><br><br>
                PASSWORD : <input type="password" name="password" placeholder="Enter password here"  onkeyup="if(event.keyCode=='13'){<?php $test = null; ?>;}"><br><br><br><br>
                <center>
                <input type="submit" value="Login" name="login">
                
                </center>
              </form>
              
              <form action="signup.php" method="post">
              <center>
                <input type="submit" value="Sign up" name="signup">
              </center>

              </form>
              </div>
              <?php
              session_start();
              $test = $_SESSION['test'];
              echo $_SESSION["test"];
              unset($_SESSION['test']);
              ?>
            </div>
            
            
    </div>

</body>
</html>