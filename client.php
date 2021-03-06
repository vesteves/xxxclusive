﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
        <title>Dark Pro - Client</title>
        <meta http-equiv="content-type" content="application/xhtml; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if lt IE 8.]><link rel="stylesheet" type="text/css" href="css/style-ie.css" /><![endif]-->
        <!--[if lt IE 7.]><link rel="stylesheet" type="text/css" href="css/style-ie6.css" /><![endif]-->
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
                    <p class="page_title"> CLIENTS </p>
                    <!-- Heading -->
                    <!-- Client Logo1 -->
                    <div class="clients_logo"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/d3e_client_big.jpg" alt="" /></a> </div>
                    <!-- Client Logo1 -->
                    <!-- Client Logo2 -->
                    <div class="clients_logo"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo2 -->
                    <!-- Client Logo3 -->
                    <div class="clients_logo_r"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/design3edge_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo3 -->
                    <!-- Client Logo4 -->
                    <div class="clients_logo"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo4 -->
                    <!-- Client Logo5 -->
                    <div class="clients_logo"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/design3edge_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo5 -->
                    <!-- Client Logo6-->
                    <div class="clients_logo_r"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo6 -->
                    <!-- Client Logo7 -->
                    <div class="clients_logo"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/design3edge_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo7 -->
                    <!-- Client Logo8 -->
                    <div class="clients_logo"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo8 -->
                    <!-- Client Logo9 -->
                    <div class="clients_logo_r"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/design3edge_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo9 -->
                    <!-- Client Logo10 -->
                    <div class="clients_logo"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo10 -->
                    <!-- Client Logo11 -->
                    <div class="clients_logo"> <a href="images/d3e_client_big.jpg" rel="rokbox[800 479]"><img src="images/design3edge_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo11 -->
                    <!-- Client Logo12-->
                    <div class="clients_logo_r"> <a href="images/techie_park_client_big.jpg" rel="rokbox[800 479]"><img src="images/techiepark_logo.jpg" alt="" /></a> </div>
                    <!-- Client Logo12 -->
                    <!-- Client Logo13 -->
                    <div class="clients_logo"> <a href="images/branquinha.jpg" rel="rokbox[800 479]"><img src="images/branquinha.jpg" alt="" /></a> </div>
                    <!-- Client Logo13 -->
                </div>
                <!-- Left Content Body Ends Here -->
                <!-- Right Content Body Starts Here -->
                <div class="right_content_body">
                    <!-- Testimonial Starts here -->
                    <!-- Heading -->
                    <p class="page_sub_title"> Testimonials </p>
                    <!-- Heading -->
                    <div class="testi_box_client">
                        <!-- Testimonial 1 -->
                        <span>Technology advances are providing tools to create Rich Internet Applications (RIA) based on the tenets of Web 2.0 </span>
                        <p>- sada (Design3Edge) </p>
                        <!-- Testimonial 1 -->
                        <br />
                        <!-- Testimonial 2 -->
                        <span>Technology advances are providing tools to create Rich Internet Applications (RIA) based on the tenets of Web 2.0 </span>
                        <p>- javatechie (Techiepark) </p>
                        <!-- Testimonial 2 -->
                        <br />
                        <!-- Testimonial 3-->
                        <span>Talk to us if you are looking for business savvy online solutions rather than possibilities of technology. </span>
                        <p>- sada (Design3Edge) </p>
                        <!-- Testimonial 3 -->
                        <br />
                        <!-- Testimonial 4 -->
                        <span>Technology advances are providing tools to create Rich Internet Applications (RIA) based on the tenets of Web 2.0 </span>
                        <p>- javatechie (Techiepark) </p>
                        <!-- Testimonial 4 -->
                        <br />
                        <!-- Testimonial 5 -->
                        <span>Talk to us if you are looking for business savvy online solutions rather than possibilities of technology. </span>
                        <p>- sada (Design3Edge) </p>
                        <!-- Testimonial 5 -->
                    </div>
                    <!-- Testimonial Ends Here -->
                </div>
                <!-- Right Content Body Ends here -->
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