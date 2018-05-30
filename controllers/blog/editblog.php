<?php
require '../../config/config.php';
  $method = $_GET['method'];
  $request = $_POST;

  if($method=="new"){
    //$file = !empty($request['file']) ?$request['file'] : null;

        $sql = "SELECT COUNT(blog) AS num FROM contents";
        $stmt = $pdo->prepare($sql);

        //Execute.
        $stmt->execute();
        
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //If the provided username already exists - display error.
        if ($row['num'] >= 0){
            $blog = $row['num'] + 1;
        }

        $title = !empty($request['title']) ?$request['title'] : null;
        $text = !empty($request['text']) ?$request['text'] : null;
       
        // this is not correct
        //$created_at = "SELECT NOW() + 0;""

        // This is correct way to get current date time and store in a variable 
         $created_at = date('Y-m-d H:i:s');

        
        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO contents (title, text, blog, created_at, user_id) VALUES (:title, :text, :blog, :created_at, :user_id)";
        $stmt = $pdo->prepare($sql);

        //Bind our variables.
        $stmt->bindValue(':title', $title,PDO::PARAM_STR);
        $stmt->bindValue(':text', $text,PDO::PARAM_STR);
        $stmt->bindValue(':blog', $blog,PDO::PARAM_INT);        
        // $stmt->bindValue(':created_at', $created_at,PDO::PARAM_INT);
        $stmt->bindValue(':created_at', $created_at,PDO::PARAM_STR); // created_at is a string
        // I have also changed 'updated_at' and 'created_at' fields type from int to datetime
        // you can do edit tables fields from phpmyadmin, tab structure -> change
        
        // we have set the user_id in session after that user logged in or registered 
        // var_dump($_SESSION);
        // die();
        $user_id = isset($_SESSION["user_id"])?$_SESSION["user_id"]:1;

        $stmt->bindValue(':user_id', $user_id,PDO::PARAM_INT);
    
        //Execute the statement and insert the new post.
        $result = $stmt->execute();
        
        //If the process is successful.
        if($result){
            echo "Added content successfully";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "<a href='../../index.php?'>To the Homepage:</a>";
            echo "</br>";
            echo "<a href='../../index.php?page=blog'>To the Blog:</a>";           
        }
  }
?>