<?php
require ' ../../config/config.php';

//i still have to get $dbUN and $dbPW from users in order to compare it to the entered username and password
            $msg = '';            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST[$username] == $dbUN && 
                  $_POST[$password] == $dbPW) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  $msg="Logged in to Appex.ch";
               }else {
                  $msg = 'Please enter a valid Username or Password';
               }
            }
            echo $msg;
         ?>

      <?php
         // define variables and set to empty values
         $nameErr = $passwordErr = "";
         $uname = $password = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["uname"])) {
               $nameErr = "Name is required";
            }else {
               $uname = test_input($_POST["uname"]);
            }
            
            if (empty($_POST["pword"])) {
               $genderErr = "Password is required";
            }else {
               $pword = test_input($_POST["pword"]);
            }
         }
         
         //prevent js injection by stripping < / and >
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>

      <div class="box" class="marginTop">
        <article class="media">
          <div class="media-content">
                <p class=login>
                    <p class="title">AppEx Login</p>
                    <form action="config/login.php" method="POST">
                        <div class="field">
                                <div class="control">
                                    <label class="label">Username</label>
                                    <input class="input is-info" type="text" name="uname" placeholder="Enter Username">
                                </div>
                        </div>

                        <div class="field">
                                <div class="control">                                    
                                    <label class="label">Password</label>
                                    <input class="input is-info" type="password" name="pword" placeholder="Enter Password">
                                </div>
                        </div>
                                                  
                        <button class="button" type="submit">Login</button>                        
                        <label></label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
                        <a href="index.php?page=register" style="float: right;">Not registered yet?</a>
                    </form>
                </p>
            </div>
        </article>
      </div>