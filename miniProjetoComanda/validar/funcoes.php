<?php

// Limpar dados para evitar possíveis scripts
function __e($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = $valor;
    }
    return $arrayLimpo;
}

// Verificar se o formulário foi enviado
function formEnviado($postArray) {
    global $dados;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

// Criar mensagem de erro

function gerarMensagensErro($postArray) {
   
    global $mensagem_erro;
    verificaCamposVazios();
    
    $pratoPrincipal = $postArray['prato_principal'];
    $acompanhamento = $postArray['acompanhamento'] = ( isset($_POST['acompanhamento']) ) ? $_POST['acompanhamento'] : null;
    $confirmaTermos = $postArray['confirmar'] = ( isset($_POST['confirmar']) ) ? $_POST['confirmar'] : null;
    $nome = $postArray['nome'];
    $entrega = $postArray['entrega'];
    $fone = $postArray['telefone'];

    //preechimento dos erros
    $retornoValidaPratoPrincipal = pratoPrincipal($pratoPrincipal);
    $retornoValidaAcompanhamento = validaAcompanhamento($acompanhamento);
    $retornoValidaConfirmar = validaConfirmar($confirmaTermos);
    $retornoNome = validaNome($nome);
    $retornoEntrega = validaEntrega($entrega);
    $retornoFone = validaFone($fone);


    $mensagem_erro['ErrosList'] = array(
        'ERROR_00' => $retornoValidaPratoPrincipal,
        'ERROR_01' => $retornoValidaAcompanhamento,
        'ERROR_02' => $retornoValidaConfirmar,
        'ERROR_03' => $retornoNome,
        'ERROR_04' => $retornoEntrega,
        'ERROR_05' => $retornoFone
    );
    
    $mensagem_erro['NotErroList'] = array(
        'GERAR_COMANDA' => "Gerar comanda de pedidos",
    );
   
   return $mensagem_erro['ErrosList'];
}

function verificaCamposVazios(){
    global $arrayRetorno;

    function pratoPrincipal($validaPratoPrincipal){
        if( empty($validaPratoPrincipal) ){
            $arrayRetorno['ERROR_00'] = "Prato Principal obrigatorio!";
            return $arrayRetorno['ERROR_00'];
        }
    }

    function validaAcompanhamento($validaAcompanhamento){
        if( empty($validaAcompanhamento) ){
            $arrayRetorno['ERROR_01'] = "Acompanhamento obrigatorio!";
            return $arrayRetorno['ERROR_01'];
        }
    }

    function validaConfirmar($confirmaTermos){
        if( empty($confirmaTermos) ){
            $arrayRetorno['ERROR_02'] = "campo de confirmação obrigatoria!";
            return $arrayRetorno['ERROR_02'];
        }
    }

    function validaNome($nome){
        if( empty($nome) ){
            $arrayRetorno['ERROR_03'] = "campo de nome obrigatorio!";
            return $arrayRetorno['ERROR_03'];
        }
    }

    function validaEntrega($entrega){
        if( empty($entrega) ){
            $arrayRetorno['ERROR_04'] = "campo de entrega obrigatorio!";
            return $arrayRetorno['ERROR_04'];
        }
    }

    function validaFone($fone){
        if( empty($fone) ){
            $arrayRetorno['ERROR_05'] = "campo de telefone obrigatorio!";
            return $arrayRetorno['ERROR_05'];
        }
    }
        
}

