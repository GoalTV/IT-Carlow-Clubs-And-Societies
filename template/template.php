<!--
*     Template Layout.
*     Project for Institute of Technology Carlow
*     @Janusz Czeropski C00176885@itcarlow.ie 
*     2022
-->
<?php 
  session_start();
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/db.inc.php');
  ?>


<html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/template/header_tpl.php'); //Calling Header ?>
<body>

        <?php //Calling Content from /template

            if(!isset($_GET['page']) || $_GET['page'] == ''){
                $page = 'home'; //If no page specified
            } 
            else 
            {
                $page = $_GET['page'];
            }

            require_once($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); //Get Php files from /template

        ?>

    </body>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/template/footer_tpl.php'); //Calling Footer ?>
        
</html>