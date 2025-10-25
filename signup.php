hello signin form
<div style="width:100vw; height: 100vh; display: flex; align-items: center;">
            <div style="border: 3px solid rgba(0, 128, 28, 1); width:300px; height: 280px; line-height: 10px; text-align:center;  margin: 0 auto;"> 
              <h1>Login</h1>
              <br><br><br>
              
              <div style="border: 0px solid rgba(0, 128, 28, 1); text-align:right; margin : auto 10;">
              <form action="signup_proc.php" method="post">
                 I    D  : <input type="text" name="id" placeholder="Enter id here"  onkeyup="if(event.keyCode=='13'){<?php $id = null; ?>;}"><br><br>
                PASSWORD : <input type="password" name="password" placeholder="Enter password here"  onkeyup="if(event.keyCode=='13'){<?php $passwd = null; ?>;}"><br><br>
                 E-mail  : <input type="text" name="email" placeholder="Enter e-mail here"  onkeyup="if(event.keyCode=='13'){<?php $id = null; ?>;}"><br><br><br><br>
                <center>
                <input type="submit" value="signup" name="signup">
                
                </center>
              </form>
              
              <form action="signup.php" method="post">
              <center>
                <input type="submit" value="reset" name="reset">
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
