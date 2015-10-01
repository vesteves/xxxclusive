<script>
    //submeter a form
    function submitabagaça() {
        document.mandabala.submit()
    }
</script>
<!-- máscara de campo_data e campo_telefone-->
<script type="text/javascript">
    //máscara de data
    function dateMask(inputData, e) {

        var tecla;

        if (document.all) // Internet Explorer
            tecla = event.keyCode;
        else //Outros Browsers
            tecla = e.which;

        if (tecla >= 48 && tecla < 58) { // numeros de 0 a 9 e '/'
            var data = inputData.value;

            //validar o dia do mês
            if (data.length == 2) {
                if (inputData.value >= 1 && inputData.value <= 31) {
                    data += '/';
                    inputData.value = data;
                    return true;
                }
                else
                    return false;
            }

            //validar o mês (de 1 a 12)
            if (data.length == 5) {
                mes = data[3] + "" + data[4];
                if (mes >= 1 && mes <= 12) {
                    data += '/';
                    inputData.value = data;
                    return true;
                }
                else
                    return false;
            }

            //validar o ano (de 1900 a 2100)
            if (data.length == 8) {
                ano = data[6] + "" + data[7];
                if (ano >= 19 && ano <= 21) {
                    inputData.value = data;
                    return true;
                }
                else
                    return false;
            }

        } else if (tecla == 8 || tecla == 0) // Backspace, Delete e setas 
            //direcionais(para mover o cursor, apenas para FF)
            return true;
        else
            return false;
    }

    //máscara de telefone
    function maskIt(w, e, m, r, a) {

        // Cancela se o evento for Backspace
        if (!e)
            var e = window.event
        if (e.keyCode)
            code = e.keyCode;
        else if (e.which)
            code = e.which;

        // Variáveis da função
        var txt = (!r) ? w.value.replace(/[^\d]+/gi, '') :
                w.value.replace(/[^\d]+/gi, '').reverse();
        var mask = (!r) ? m : m.reverse();
        var pre = (a) ? a.pre : "";
        var pos = (a) ? a.pos : "";
        var ret = "";

        if (code == 9 || code == 8 ||
                txt.length == mask.replace(/[^#]+/g, '').length)
            return false;

        // Loop na máscara para aplicar os caracteres
        for (var x = 0, y = 0, z = mask.length; x < z && y < txt.length; ) {
            if (mask.charAt(x) != '#') {
                ret += mask.charAt(x);
                x++;
            } else {
                ret += txt.charAt(y);
                y++;
                x++;
            }
        }

        // Retorno da função
        ret = (!r) ? ret : ret.reverse()
        w.value = pre + ret + pos;
    }

    // Novo método para o objeto 'String'
    String.prototype.reverse = function() {
        return this.split('').reverse().join('');
    };

</script>

<?php
include_once 'phpQuery-onefile.php';

//milagre do CEP
function simple_curl($url, $post = array(), $get = array()) {
    $url = explode('?', $url, 2);
    if (count($url) === 2) {
        $temp_get = array();
        parse_str($url[1], $temp_get);
        $get = array_merge($get, $temp_get);
    }
    $ch = curl_init($url[0] . "?" . http_build_query($get));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($ch);
}

//arrumar a data
function dtBanco($data) {
    $data = trim($data);
    if (strlen($data) != 10) {
        $rs = "";
    } else {
        $arr_data = explode("/", $data);
        $data_banco = $arr_data[2] . "-" . $arr_data[1] . "-" . $arr_data[0];
        $rs = $data_banco;
    }
    return $rs;
}

//arrumar o telefone
function telBanco($tel) {
    $tel = str_replace(')', '', $tel);
    $tel = str_replace('(', '', $tel);
    $rs = trim($tel);
    return $rs;
}
?>
