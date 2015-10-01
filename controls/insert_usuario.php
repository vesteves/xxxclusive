<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //adicionando as funções
        require_once '../functions/functions.php';
        include_once '../model/conn.php';
        //pegando as informações
        $nome = $_POST[("nome")];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $data = $_POST["aniversario"];
        $telefone = $_POST["telefone"];
        $gls = $_POST["gls"];
        $sexo = $_POST["sexo"];
        $ativo = '1';

// INÍCIO tratamento dos dados //
        $data = dtBanco($data);
        $telefone = telBanco($telefone);
// FIM tratamento dos dados //
        
        /*
          echo "$nome </br>";
          echo "$email </br>";
          echo "$cep </br>";
          echo "$rua <br/>";
          echo "$bairro <br/>";
          echo "$cidade <br/>";
          echo "$uf <br/>";
          echo "$telefone </br>";
          echo "$data <br/>";
          echo "$gls <br/>";
          echo "$sexo <br/>";
         */

        //CEP
        $html = simple_curl('http://m.correios.com.br/movel/buscaCepConfirma.do', array(
            'cepEntrada' => $cep,
            'tipoCep' => '',
            'cepTemp' => '',
            'metodo' => 'buscarCep')
        );
        phpQuery::newDocumentHTML($html, $charset = 'utf-8');
        $rua = trim(pq('.caixacampobranco .resposta:contains("Logradouro: ") + .respostadestaque:eq(0)')->html());
        $bairro = trim(pq('.caixacampobranco .resposta:contains("Bairro: ") + .respostadestaque:eq(0)')->html());
        $cidade_uf = trim(pq('.caixacampobranco .resposta:contains("Localidade / UF: ") + .respostadestaque:eq(0)')->html());
        $cidade_uf = explode('/', $cidade_uf);
        $cidade = trim($cidade_uf[0]);
        $uf = trim($cidade_uf[1]);
        $cep = trim(pq('.caixacampobranco .resposta:contains("CEP: ") + .respostadestaque:eq(0)')->html());
        //fim CEP
        // FIM tratamento dos dados //
        //início da validação de usuário
        $consulta = "select * from Pessoas where email='$email'";
        $rs = mysql_query($consulta);
        if (mysql_num_rows($rs) >= 1) {
            $msg = base64_encode("Usuário existente.");
            header("location:novo.php?m=" . $msg);
            mysql_close();
        } else {
            $sql = "INSERT INTO pessoas VALUES(null,
          '" . $nome . "',
          '" . $email . "',
          '" . $cep . "',
          '" . $rua . "',
          '" . $bairro . "',
          '" . $cidade . "',
          '" . $uf . "',
          '" . $data . "',
          '" . $telefone . "',
          '" . $sexo . "',
          '" . $gls . "',
          '" . $ativo . "')";
            if (mysql_query($sql)) {
                session_start();
                $_SESSION["nome"] = $nome;
                header("location:../index.php");
                mysql_close();
            } else {
                $msg = base64_encode("Não gravou.");
                header("location:../novo.php?m=" . $msg);
                mysql_close();
            }
        }
        ?>
    </body>
</html>
