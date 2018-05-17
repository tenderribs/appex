 <br>
<br>
<div class="box" class="marginTop">
  <article class="media">
    <div class="media-content">
      <p class=login>
        <p class="title">
            <?php  
                if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"])) {
                    echo "welcome ".$_SESSION["email"];
                    echo "<br/>";
                    echo "Login date and time : ". $_SESSION["loginDateTime"];
                    //check if the user is an admin, if so, show it the link to admin tools
                    if($_SESSION["email"]=="mark@markmarolf.com"){
                      echo "<br/>";
                      echo "<br/>";
                      echo "<a href='index.php?page=admin'>Admin page</a>";
                    }
                } else {
                    echo "Please log in or register for further access to all tools";
                }
            ?>
        </p>        
      </p>
    </div>
  </article>
</div>