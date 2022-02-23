<html>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/header_tpl.php'); //Calling Header ?>
<body>
    <div id="Content ">
        <?php //Calling Content from /template
            if(!isset($_GET['page']) || $_GET['page'] == ''){
                $page = 'home'; //If no page specified
            } else {
                $page = $_GET['page'];
            }

            switch($page)
            {
                case $page:
                    include($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); //Get Php files from /template/
                    break;

            }
        ?>
    </div>
    </body>
    <div id="footer">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/footer_tpl.php'); //Calling Footer ?>
    </div>
</html>