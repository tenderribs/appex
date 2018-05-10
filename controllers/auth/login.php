<?php
// require '../../config/config.php';

// //i still have to get $dbUN and $dbPW from users in order to compare it to the entered username and password
//             // $msg = '';            
//             if (!empty($_POST['email']) && !empty($_POST['password'])) {

//                 $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
//                 $password = !empty($_POST['password']) ?$_POST['password'] : null;

//                 //Construct the SQL statement and prepare it.
//                 $sql = "SELECT email, password FROM users WHERE email = :email";
//                 $stmt = $pdo->prepare($sql);
                
//                 //Bind the provided email to our prepared statement.
//                 $stmt->bindValue(':email', $email);
                
//                 //Execute.
//                 $stmt->execute();

//                 //Fetch the row.
//                 $row = $stmt->fetch(PDO::FETCH_ASSOC);
               
//                 // var_dump($row);
                    
//                 if (isset($row['email'])) {
//                     // var_dump($row['email']);
                    
//                     $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
                    
//                     if ($row['password'] == $passwordHash) {
//                         var_dump($row);
//                         header("Location: /index.php?page=welcome"); /* Redirect browser */
//                         exit();
//                     } else {
//                         echo $passwordHash;
//                         echo '<br/>';
//                         echo $row['password'];
//                         echo '<br/>';
                        
//                         die ('password is nicht korrecT, YOU SHALL NOT PASSS!');
//                     }
//                 }
                
            //    if ($_POST[$username] == $dbUN && $_POST[$password] == $dbPW) {
            //       $_SESSION['valid'] = true;
            //       $_SESSION['timeout'] = time();
            //       $_SESSION['username'] = 'tutorialspoint';
                  
            //       $msg="Logged in to Appex.ch";
            //     } else {
            //       $msg = 'Please enter a valid Username or Password';
            //    }
            // }
            // echo $msg;


        //  // define variables and set to empty values
        //  $nameErr = $passwordErr = "";
        //  $uname = $password = "";
         
        //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if (empty($_POST["uname"])) {
        //        $nameErr = "Name is required";
        //     }else {
        //        $uname = test_input($_POST["uname"]);
        //     }
            
        //     if (empty($_POST["pword"])) {
        //        $genderErr = "Password is required";
        //     }else {
        //        $pword = test_input($_POST["pword"]);
        //     }
        //  }
         
        //  //prevent js injection by stripping < / and >
        //  function test_input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        //  }
?>
