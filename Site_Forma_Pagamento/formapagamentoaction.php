<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Resultado</title>
</head>
<body class="w3-light-gray">
<!-- INICIANDO O PHP PARA RECEBER OS DADOS DA PAGINA DE CADASTRO DO PAGAMENTO -->
<?php
// ENTRADADE DAS VARIAVEIS
    $nome = $_POST['txtNome'];
    $valor = $_POST['txtValorCompra'];
    $formapagamento = $_POST['cmbPag'];
    $porcentagem;
    $valordesconto;
    $valorfinal;

// USANDO OS IFS PARA DETERMINAR A PORCENTAGEM DO DESCONTO DA COMPRA
    if ($formapagamento == "Depósito"){
        $porcentagem = 10;
    }elseif ($formapagamento == "Boleto"){
        $porcentagem = 8;
    }else{
        $porcentagem = 0;
    }
// CALCULANDO OS VALORES DE DESCONTO E FINAL DA COMPRA
    $valordesconto = $valor * $porcentagem / 100;
    $valorfinal = $valor - $valordesconto;
?>
<!-- INICIANDO A PAGINA DE EXIBIÇÃO -->
    <div class="w3-container w3-dark-gray w3-center w3-margin">
        <h1><b> PROMOÇÃO DE MÊS DE ANIVERSÁRIO! </b></h1>
         <h2>
<!-- PHP PARA EXIBIR O DADOS RECEBIDOS -->
            <?php
            echo $nome."!<br>";
            if ($valordesconto > 0){
            echo "Valor da Compra Sem Desconto: R$ ".$valor."<br>";
            } //IF PARA EXIBIR O TEXTO DE VALOR SEM DESCONTO SE HOUVER VALOR DE DESCONTO MAIOR QUE 0
            echo "Forma de Pagamento Escolhida: ". $formapagamento."<br>";
            if ($porcentagem > 0){
            echo "Desconto de: ".$porcentagem ."% <br>";
            }//IF PARA EXIBIR O TEXTO DE PORCENTAGEM SE HOUVER VALOR MAIOR QUE 0
            if ($valordesconto > 0){
            echo "Você Economizou: R$ ".$valordesconto."<br>";
            }//IF PARA EXIBIR O TEXTO DE VALOR QUE ECONOMIZOU SE O VALOR FOR MAIOR QUE 0
            echo "Valor à Pagar: R$ ".$valorfinal."<br>";
            ?>
        </h2>
    </div>
</body>
</html>

<!-- Na pagina atividadeonline.php usei o codigo que foi enviado na atividade, porem fiz alguns ajustes para deixar mais agradavel a visualização do layout do site, como é um "codigo padrão" não adicionei comentarios ele.
Nessa pagina eu criei com base na imagem de exemplo da ativida, seguindo a ordem dos textos. Somente fiz uns ajuste na exibição dos texto, se usar a forma de pagamento "Cartão de Crédito" retirei os textos de "Valor da Compra Sem Desconto", "Desconto de" e "Você Economizou" pois como essa forma de pagamento não contem descontos então achei melhor não exibir os valores "zerados" na tela. Com as outras formas de pagamento esta sendo exibidos normalmente! -->