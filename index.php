<?php
   ob_start();
   session_start();
?>
<?php include('config/config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('metaData.php');   ?>
    </head>
    <body>
        <?php     //navbar
            require_once('header.php');
        ?>   
        <section class="section">
            <div class="container">
            <?php
                
                $page = isset($_GET["page"]) ? $_GET["page"] : null;
                    //page content
                if ($page == '') {
                    require_once('pages/home.html');

                } else if ($page == 'features') {
                    require_once('pages/features.html');

                } else if ($page == 'system') {
                    require_once('pages/system.html');

                } else if ($page == 'blog') {
                    require_once('pages/blog.html');
                }
                else if ($page == 'login') {
                    require_once('pages/login.html');
                }
                else if ($page == 'register') {
                    require_once('pages/register.html');
                }
            ?>
            </div>
        </section>
    </body>
</html>