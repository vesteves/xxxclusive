<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
        <title>XXXCLUSIVE - LOGIN</title>
        <meta http-equiv="content-type" content="application/xhtml; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if lt IE 8.]><link rel="stylesheet" type="text/css" href="css/style-ie.css" /><![endif]-->
        <!--[if lt IE 7.]><link rel="stylesheet" type="text/css" href="css/style-ie6.css" /><![endif]-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <?php include_once 'functions/functions.php'; ?>
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
                            <a href="index.php" class="menu_active">HOME</a><span class="menu_border">&nbsp;</span> 
                            <a href="#" class="menu_links">FOTOS</a><span class="menu_border">&nbsp;</span>
                            <a href="client.html" class="menu_links">CLIENTS</a><span class="menu_border">&nbsp;</span> 
                            <a href="contact.html" class="menu_links">CONTACT</a> 
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
                    <p class="page_title"> CADASTRO </p>
                    <!-- Heading -->
                    <form name="mandabala" method="post" action="controls/insert_usuario.php">

                        <h3>Qual seu nome?<span class="star">*</span></h3>
                        <input type="text" name="nome" value="" id="nome"/>
                        <br/>

                        <h3>Seu email, por gentileza?<span class="star">*</span></h3>
                        <input type="text" name="email" id="email"/>
                        <br/>

                        <h3>Poe seu CEP para mandarmos um carro ZERO para ti. <br/>
                            (no pensamento, óbvio)<span class="star">*</span></h3>
                        <input type="text" name="cep" id="cep" onkeyup="maskIt(this,event,'#####-###')"/>
                        <br/>
                        <h3>Qual a data de seu nascimento? (dd/mm/aaaa)<span class="star">*</span></h3>

                        <input type="text" name="aniversario" id="datNascimento" 
                               maxlength="10" onkeypress="return dateMask(this, event);" />                        
                        <br/>
                        <h3>E ai, tem telefone?<span class="star">*</span></h3>
                        <input type="text" name="telefone" id="telefone" onkeyup="maskIt(this,event,'(##)#########')" />

                        <h3>Na certidão, foi lhe dado qual sexo?<span class="star">*</span></h3>
                        <select name="sexo">
                            <option value="F">Mulher</option>
                            <option value="M" selected="selected">Homem</option>
                        </select>
                        <br/><br/>

                        <h3>Quer receber informações de festas GLS?<span class="star">*</span></h3>
                        <select name="gls">
                            <option value="0">Não</option>
                            <option value="1" selected="selected">Sim</option>
                        </select>
                        <br/><br/>
                        <a class="bt-02" href="javascript:submitabagaça()">Manda bala!</a>
                    </form>
                    <?php
                    if (isset($_GET["m"])) {
                        echo base64_decode($_GET["m"]);
                    } else {
                        echo "";
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