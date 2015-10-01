<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_USER_NOTICE);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', true);
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
        <title>XXXCLUSIVE - FOTOS</title>
        <meta http-equiv="content-type" content="application/xhtml; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if lt IE 8.]><link rel="stylesheet" type="text/css" href="css/style-ie.css" /><![endif]-->
        <!--[if lt IE 7.]><link rel="stylesheet" type="text/css" href="css/style-ie6.css" /><![endif]-->
        <!--  STEP ONE: insert path to SWFObject JavaScript -->
        <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
        <!-- Rokbox Starts here -->
        <script type="text/javascript" src="rokbox/mootools-release-1.11.js"></script>
        <script type="text/javascript" src="rokbox/rokbox.js"></script>
        <link href="rokbox/themes/dark/rokbox-style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="rokbox/themes/dark/rokbox-config.js"></script>
        <!-- Rokbox Ends here -->
    </head>
    <body>
        <!-- Main Body Starts Here -->
        <div id="main_body">
            <!-- Top Part Starts Here -->
            <div id="top_part">
                <!-- Top Part Image Starts Here -->
                <div id="top_part_image">
                    <!-- Logo Part Starts Here -->
                    <div id="main_logo"> <a href="#"><img src="images/main_logo.png" id="main_logo_img" alt=""  /></a> </div>
                    <!-- Logo Part Ends Here -->
                </div>
                <!-- Top Part Image Ends Here -->
                <!-- Main Menu Starts Here -->
                <div id="main_menu_bg">
                    <!-- Main Menu Body Starts Here -->
                    <div id="main_menu_body">
                        <!-- Menu Links Starts Here -->
                        <div class="menu_links"> 
                            <a href="index.php" class="menu_links">HOME</a><span class="menu_border">&nbsp;</span> 
                            <a href="cliques.php" class="menu_links">FOTOS</a><span class="menu_border">&nbsp;</span>
                            <a href="client.php" class="menu_links">CLIENTS</a><span class="menu_border">&nbsp;</span> 
                            <a href="contact.html" class="menu_links">CONTACT</a><span class="menu_border">&nbsp;</span>
                            <?php
                            session_start();
                            if ((!isset($_SESSION["email"]) == true)) {
                                unset($_SESSION["email"]);
                                session_destroy();
                                $msg = base64_encode("Favor fazer o login para acesso a página de fotos.");
                                header("location:login.php?m=" . $msg);
                            }
                            if ((isset($_SESSION["email"]) == "")) {
                                ?>
                                <a href="login.php" class="menu_login">LOGIN</a><span class="menu_border">&nbsp;</span>
                                <?php
                            } else {
                                ?>
                                <a href="index.php" class="menu_login">Bem vindo <?php echo $_SESSION["nome"]; ?></a><span class="menu_border">&nbsp;</span>
                                <a href="controls/logar.php" class="menu_links">SAIR</a><span class="menu_border">&nbsp;</span>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- Menu Links Ends Here -->
                    </div>
                    <!-- Main Menu Body Ends Here -->
                </div>
                <!-- Main Menu Ends Here -->
            </div>
            <!-- Top Part Ends Here -->
            <!-- Content Body Starts Here -->
            <div id="inner_content_body">
                <!-- Left Content Body Starts Here -->
                <div class="left_content_body">
                    <!-- Heading -->
                    <p class="page_title"> FOTOS <br/>
                        <?php
                        if (isset($_GET["d"]) && isset($_GET["n"])) {
                            $data = $_GET["d"];
                            $boate = $_GET["n"];
                            $dataArrumada = $data[0] . $data[1] . "/" . $data[2] . $data[3] . "/" . $data[4] . $data[5] . $data[6] . $data[7];

                            echo $boate . " dia " . $dataArrumada;
                            ?></p>
                        <!-- Heading -->
                        <?php
                        $destino = "galeria/" . $boate . "/" . $data . "/";
                        $arquivos = scandir($destino);
                        $cont = 1;
                        foreach ($arquivos as $arq) {
                            $temp = $destino . $arq;
                            if (count(explode("-", $arq)) > 1) {
                                //echo "<img src='".$temp."'/>";
                                $tamanho = getimagesize($destino . $arq);
                                $largura = $tamanho[0];
                                $altura = $tamanho[1];
                                if ($cont % 3 == 0) {
                                    $R = "clients_logo_r";
                                } else {
                                    $R = "clients_logo";
                                }
                                ?>
                                <div class="<?php echo $R; ?>"> 
                                    <a href="thumb.php?img=<?php echo $temp; ?>" rel="rokbox[<?php
                                    if ($largura > $altura) {
                                        //deitado
                                        echo "570 320";
                                    } elseif ($largura < $altura) {
                                        //em pé
                                        echo "320 570";
                                    }elseif($largura == $altura){
                                        //quadrado
                                        echo "570 570";
                                    }
                                    ?>]">
                                        <img src="thumb.php?img=<?php echo $temp; ?>" /></a></div>
                                <?php
                                $cont++;
                            }
                        }
                    }
                    ?>


                </div>
                <!-- Left Content Body Ends Here -->
                <!-- Clear -->
                <div class="clear"> </div>
                <!-- Clear -->
            </div>
            <!-- Content Body Ends Here -->
            <!--Footer Starts Here -->
            <div id="footer">
                <div class="left">
                    <div class="footer_links" ><a  href="#">Home</a> &nbsp;| &nbsp;<a  href="#">About</a> &nbsp;| &nbsp;<a  href="#">Services</a> &nbsp;| &nbsp;<a  href="#">Clients</a> &nbsp;| &nbsp;<a  href="#">Contact</a></div>
                </div>
                <div class="right" style="padding-right:30px;"> Copyright &copy; 2010 <a style="color:#ffffff;" href="#">Name Here</a>. All rights reserved | Design by <a style="color:#ffffff;" href="http://www.design3edge.com/">Design3Edge</a></div>
            </div>
            <!-- Footer Ends Here -->
        </div>
        <!-- Main Body Ends Here -->
    </body>
</html>