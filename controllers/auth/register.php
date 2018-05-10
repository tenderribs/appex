<?php 
//     //register.php
    
//     /**
//      * Include our MySQL connection.
//      * I am trying to open it by signalising with ../ that it is in the folder above
//      */
//     require '../../config/config.php';
    
    
//     //If the POST var "register" exists (our submit button), then we can
//     //assume that the user has submitted the registration form.
//     // if(isset($_POST['register'])){
        
//         //Retrieve the field values from our registration form.
//         $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

//         $password = !empty($_POST['password']) ?$_POST['password'] : null;
//         $password_confirmation = !empty($_POST['password_confirmation']) ?$_POST['password_confirmation'] : null;

//         if ($password != $password_confirmation) {
//             // echo "passwords are not equal";
//             die("passwords are not equal");
//         }
        
//         //TO ADD: Error checking (email characters, password length, etc).
//         //Basically, you will need to add your own error checking BEFORE
//         //the prepared statement is built and executed.
        
//         //Now, we need to check if the supplied email already exists.
        
//         //Construct the SQL statement and prepare it.
//         $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
//         $stmt = $pdo->prepare($sql);
        
//         //Bind the provided email to our prepared statement.
//         $stmt->bindValue(':email', $email);
        
//         //Execute.
//         $stmt->execute();
        
//         //Fetch the row.
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         //If the provided username already exists - display error.
//         //TO ADD - Your own method of handling this error. For example purposes,
//         //I'm just going to kill the script completely, as error handling is outside
//         //the scope of this tutorial.
//         if ($row['num'] > 0){
//             die('That email already exists!');
//         }
        
//         //Hash the password as we do NOT want to store our passwords in plain text.

//         $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
        
//         //Prepare our INSERT statement.
//         //Remember: We are inserting a new row into our users table.
//         $sql = "INSERT INTO users (email, password, last_login) VALUES (:email, :password, NOW())";
//         $stmt = $pdo->prepare($sql);

//         //Bind our variables.

//         $stmt->bindValue(':email', $email);
//         $stmt->bindValue(':password', $passwordHash);
    
//         //Execute the statement and insert the new account.
//         $result = $stmt->execute();
        
//         //If the signup process is successful.
//         if($result){
//             //What you do here is up to you!

//             echo 'Thank you for registering with our website.';
//             header("Location: /index.php?page=welcome"); /* Redirect browser */
//             exit();
//         }
        
//    // }
?>
