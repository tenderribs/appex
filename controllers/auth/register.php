<?php 
//register.php
 
/**
 * Include our MySQL connection.
 * I am trying to open it by signalising with ../ that it is in the folder above
 */
require ' ../../config/config.php';
 
 
//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    
    //Now, we need to check if the supplied username already exists.
    
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if($row['num'] > 0){
        die('That username already exists!');
    }
    
    //Hash the password as we do NOT want to store our passwords in plain text.
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
    
    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    
    //Bind our variables.
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
 
    //Execute the statement and insert the new account.
    $result = $stmt->execute();
    
    //If the signup process is successful.
    if($result){
        //What you do here is up to you!
        echo 'Thank you for registering with our website.';
    }
    
}
?>

<br><br>
<div class="box" class="marginTop">
        <article class="media">
          <div class="media-content">
                <p class=login>
                    <form action="register.php" method="POST">                        
                    <p class="title">AppEx Registration</p>
                        <div class="field">
                                <div class="control">
                                    <label class="label">Username</label>
                                  <input class="input is-info" type="text" name="username" placeholder="Enter Username">
                                </div>
                        </div>

                        <div class="field">
                                <div class="control">                                                   
                                    <label class="label">Password</label>
                                     <input class="input is-info" type="password" name="pword" placeholder="Enter Password">
                                </div>
                        </div>                          
                
                        <div class="field">
                                <div class="control">
                                    <label class="label">Email</label>
                                  <input class="input is-info" type="text" name="uname" placeholder="Enter Email">
                                </div>
                        </div>

                        <div class="field">
                                <div class="control">
                                    <label class="label">Confirm Email</label>
                                  <input class="input is-info" type="text" name="uname" placeholder="Confirm Email">
                                </div>
                        </div>
                        <button class="button" style="background-color: #00c04a" type="submit">Register</button>
                        <label>

                        <a href="index.php?page=login" style="float: right;">Already Registered?</a>
                </form>
              </p>
            </div>
        </article>
      </div>