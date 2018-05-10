<!--Navbar-->
<nav class="navbar is-fixed-top" style="background-color: #448afc" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item has-text-black-bis" style="background-color: #2175ff" class="appex-navbar" href="../index.php">

            <img src="images\logo.gif" alt="Applied Experience" width="75" height="32">

            <h3><strong>applied</strong>|experience</h3>
            </a>
            <a class="navbar-item has-text-black-ter" href="index.php?page=features">
                Learn more
            </a>
            <a class="navbar-item has-text-black-ter" href="index.php?page=blog">
                Contact & Blog
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <?php
                        if (session_status() === PHP_SESSION_NONE || !isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] == False) {
                            require_once('pages/navbar/login_register_buttons.html');
                        } else if ( $_SESSION["authenticated"] == True ) {
                            require_once('pages/navbar/logout_button.html');
                        }

                    ?>
                </div>
            </div>
        </div>
  </nav>