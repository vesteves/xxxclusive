<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
        <title>XXXCLUSIVE</title>
        <meta http-equiv="content-type" content="application/xhtml; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if lt IE 8.]><link rel="stylesheet" type="text/css" href="css/style-ie.css" /><![endif]-->
        <!--[if lt IE 7.]><link rel="stylesheet" type="text/css" href="css/style-ie6.css" /><![endif]-->
        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="slider/style.css" />
        <script type="text/javascript" src="slider/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
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
            <div id="content_body">
                <!-- Home Content Slider Starts Here -->
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="images/slider/20131013_02.51.21_custom.jpg" alt="2013-10-13 02.51.21 (Custom)" title="2013-10-13 02.51.21 (Custom)" id="wows1_0"/></li>
                            <li><img src="images/slider/20131102_01.07.48_custom.jpg" alt="2013-11-02 01.07.48 (Custom)" title="2013-11-02 01.07.48 (Custom)" id="wows1_1"/></li>
                            <li><img src="images/slider/20131103_13.24.25_custom.jpg" alt="2013-11-03 13.24.25 (Custom)" title="2013-11-03 13.24.25 (Custom)" id="wows1_2"/></li>
                            <li><img src="images/slider/20131105_09.13.05_custom.jpg" alt="2013-11-05 09.13.05 (Custom)" title="2013-11-05 09.13.05 (Custom)" id="wows1_3"/></li>
                        </ul></div>
                    <div class="ws_bullets"><div>
                            <a href="#" title="2013-10-13 02.51.21 (Custom)"><img src="images/slider/tooltips/20131013_02.51.21_custom.jpg" alt="2013-10-13 02.51.21 (Custom)"/>1</a>
                            <a href="#" title="2013-11-02 01.07.48 (Custom)"><img src="images/slider/tooltips/20131102_01.07.48_custom.jpg" alt="2013-11-02 01.07.48 (Custom)"/>2</a>
                            <a href="#" title="2013-11-03 13.24.25 (Custom)"><img src="images/slider/tooltips/20131103_13.24.25_custom.jpg" alt="2013-11-03 13.24.25 (Custom)"/>3</a>
                            <a href="#" title="2013-11-05 09.13.05 (Custom)"><img src="images/slider/tooltips/20131105_09.13.05_custom.jpg" alt="2013-11-05 09.13.05 (Custom)"/>4</a>
                        </div></div>
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="slider/wowslider.js"></script>
                <script type="text/javascript" src="slider/script.js"></script>
                <!-- End WOWSlider.com BODY section --> 
                <!-- Home Content Slider Ends Here -->
                <!-- Home News Starts Here -->
                <div id="home_news_box">
                    <!-- Headers Starts Here -->
                    <div class="headers"> Últimas Notícias </div>
                    <!-- Headers Ends Here -->
                    <!-- News Starts Here -->
                    <!-- Box1 Starts Here -->
                    <div class="news_boxes">
                        <!-- Image Starts Here -->
                        <div class="home_news_img"> <a href="#"><img src="images/news_1.jpg"  alt=""  /></a> </div>
                        <!-- Image Ends Here -->
                        <!-- Text Starts Here -->
                        <div>
                            <p class="news_head"><a class="news_head" href="#">Mudança de planos</a></p>
                            <p>blablablablablablablablablablablablablablablablablabblabla<br/>blablablablablablablablablablablablablablablablabla...</p>
                        </div>
                        <!-- Text Ends Here -->
                    </div>
                    <!-- Box1 Ends Here -->
                    <!-- Box2 Starts Here -->
                    <div class="news_boxes">
                        <!-- Image Starts Here -->
                        <div class="home_news_img"> <a href="#"><img src="images/news_2.jpg"  alt=""  /></a> </div>
                        <!-- Image Ends Here -->
                        <!-- Text Starts Here -->
                        <div>
                            <p class="news_head"><a class="news_head" href="#">Outras informações</a></p>
                            <p>blablablablablablablablablablablablablablablablablabblabla<br/>blablablablablablablablablablablablablablablablabla...</p>
                        </div>
                        <!-- Text Ends Here -->
                    </div>
                    <!-- Box2 Ends Here -->
                    <!-- Box3 Starts Here -->
                    <div class="news_boxes">
                        <!-- Image Starts Here -->
                        <div class="home_news_img"> <a href="#"><img src="images/news_3.jpg" alt=""  /></a> </div>
                        <!-- Image Ends Here -->
                        <!-- Text Starts Here -->
                        <div>
                            <p class="news_head"><a class="news_head" href="#">Teste1</a></p>
                            <p>blablablablablablablablablablablablablablablablablabblabla<br/>blablablablablablablablablablablablablablablablabla...</p>
                        </div>
                        <!-- Text Ends Here -->
                    </div>
                    <!-- Box3 Ends Here -->
                    <!-- Box4 Starts Here -->
                    <div class="news_boxes">
                        <!-- Image Starts Here -->
                        <div class="home_news_img"> <a href="#"><img src="images/news_4.jpg" alt=""  /></a> </div>
                        <!-- Image Ends Here -->
                        <!-- Text Starts Here -->
                        <div>
                            <p class="news_head"><a class="news_head" href="#">Teste2</a></p>
                            <p>blablablablablablablablablablablablablablablablablabblabla<br/>blablablablablablablablablablablablablablablablabla...</p>
                        </div>
                        <!-- Text Ends Here -->
                    </div>
                    <!-- Box4 Ends Here -->
                    <!-- Box5 Starts Here -->
                    <div class="news_boxes">
                        <!-- Image Starts Here -->
                        <div class="home_news_img"> <a href="#"><img src="images/news_5.jpg" alt=""  /></a> </div>
                        <!-- Image Ends Here -->
                        <!-- Text Starts Here -->
                        <div>
                            <p class="news_head"><a class="news_head" href="#">Teste3</a></p>
                            <p>blablablablablablablablablablablablablablablablablabblabla<br/>blablablablablablablablablablablablablablablablabla...</p>
                        </div>
                        <!-- Text Ends Here -->
                    </div>
                    <!-- Box5 Ends Here -->
                    <!-- News Ends Here -->
                </div>
                <!-- Home News Ends Here -->
                <!-- Home Social & Newsletter Part Starts here -->
                <div id="home_middle_part">
                    <!-- Testimonial Starts Here -->
                    <div id="testi_home">
                        <!-- Headers Starts Here -->
                        <div class="headers"> Frase do Dia </div>
                        <!-- Headers Ends Here -->
                        <div class="testi_box"> <span>"Antes um pássaro na mão do que 2 na bunda"</span>
                            <p>- Flávio Simões</p>
                        </div>
                    </div>
                    <!-- Testimonial Ends Here -->
                    <!-- News Letter Starts Here -->
                    <div id="newsletter_box"> <a href="#"><img src="images/news_letter_image.jpg"  alt="" /></a> </div>
                    <!-- NewsLetter Ends Here -->
                    <!-- Social Starts Here -->
                    <div id="social_bookmark_box">
                        <a href="https://www.facebook.com/FlavioSimoesRJ"><img src="images/twitter_icon.png" alt="" /></a>
                        <a href="#"><img src="images/facebook_icon.png" alt="" /></a>
                        <a href="#"><img src="images/linkdin_icon.png" alt="" /></a>
                    </div>
                    <!-- Social Ends Here -->
                </div>
                <!-- Home Social & Newsletter Part Starts here -->
                <!-- Home Right Box Starts here -->
                <div id="home_right_box">
                    <!-- Clients Starts Here -->
                    <!-- Headers Starts Here -->
                    <div class="headers"> Parceiros </div>
                    <!-- Headers Ends Here -->
                    <div class="clients">
                        <!-- Client1 -->
                        <p> <a href="#" ><img src="images/d3e_client.jpg" alt="" /></a> </p>
                        <!-- Clients1 -->
                        <!-- Client2 -->
                        <p> <a href="#" ><img src="images/techie_park_client.jpg" alt="" /></a> </p>
                        <!-- Client2 -->
                        <!-- Readmore Starts Here -->
                        <div class="read_more"> <a href="#">View more...</a> </div>
                        <!-- Readmore Ends Here -->
                    </div>
                    <!-- Clients Ends Here -->
                </div>
                <!-- Home Right Box Ends Here -->
            </div>
            <!-- Clear -->
            <div class="clear"> </div>
            <!-- Clear -->
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